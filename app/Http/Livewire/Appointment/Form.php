<?php

namespace App\Http\Livewire\Appointment;

use App\Models\Pet;
use App\Models\Owner;
use Livewire\Component;
use App\Models\Appointment;
use Illuminate\Support\Str;
use Nexmo\Laravel\Facade\Nexmo;
use Illuminate\Support\Facades\Log;
use App\Http\Controllers\Manage\MailController;
use App\Http\Controllers\MailController as ControllersMailController;

class Form extends Component
{
    public $services;
    /* steps */
    public $currentStep;
    public $totalStep = 2;
    public $isNewClient = false;
    public $isOldClient = false;
    public $cancel = false;

    /* Old client */
    public $hasEmail = false;
    public $emailAddress;
    public $otp;
    public $pets;
    public $pet_id;
    public $selected_pet;
    public $selected_pets;
    public $selected_pets_ids;
    public $pet;
    public $owner;
    public $addPet = false;
    public $dpet_name;
    public $dpet_type;
    public $dage;
    public $dbirthdate;
    public $dgender;
    public $dbreed;
    /* New client */
    /* owner */
    public $name;
    public $email;
    public $number;
    public $address;
    /* pet */
    public $pet_name;
    public $pet_type;
    public $age;
    public $birthdate;
    public $gender;
    public $breed;
    public $color;

    /* appointment */
    public $reason_id;
    public $date;
    public $appointments;
    public $time;
    public $isDoneFirstPhase = false;
    public $isDoneSecondPhase = false;
    public $otpCode;
    public $sentOtpCode;
    public $cancelBtn = false;
    public $yes = false;
    public $cancelId = 0;
    public $attempt = 0, $limit = 3, $rememberEmail;

    public function validateData()
    {
        switch ($this->currentStep) {
            case 2:
                if ($this->isOldClient) {
                    if ($this->hasEmail) {
                        if ($this->addPet) {
                            $this->validate([
                                // pet info
                                'pet_name' => 'required',
                                'pet_type' => 'required',
                                'age' => 'required',
                                'birthdate' => 'required',
                                'gender' => 'required',
                                'breed' => 'required',
                                'color' => 'required',
                                /* appointment */
                                'reason_id' => 'required',
                                'date' => 'required|after:today',
                                'time' => 'required',
                            ]);
                        } else {
                            $this->validate([
                                /* appointment */
                                'pet_id' => 'required',
                                'reason_id' => 'required',
                                'date' => 'required|after:today',
                                'time' => 'required',
                            ]);
                        }
                    } else {
                        $this->validate([
                            'emailAddress' => 'required|email',
                        ]);
                    }
                }
                if ($this->isNewClient) {
                    if ($this->isDoneFirstPhase) {
                        $this->validate([
                            'otpCode' => 'required|numeric|digits:4',
                        ]);
                    } else {
                        $this->validate([
                            /* owner */
                            'name' => 'required|string|max:100',
                            'email' => 'required|email|unique:owners,email',
                            'number' => 'required|numeric|digits:11',
                            'address' => 'required|string|max:256',
                            // pet info
                            'pet_name' => 'required|string|max:100',
                            'pet_type' => 'required|string',
                            'age' => 'required',
                            'birthdate' => 'required',
                            'gender' => 'required',
                            'breed' => 'required',
                            'color' => 'required',
                            /* appointment */
                            'reason_id' => 'required',
                            'date' => 'required|after:today',
                            'time' => 'required',
                        ]);
                    }
                }
                break;
        }
    }

    public function increment()
    {
        $this->currentStep++;
        if ($this->currentStep == $this->totalStep) {
            $this->currentStep = $this->totalStep;
        }
    }
    public function decrement()
    {
        $this->currentStep--;
        if ($this->currentStep < 0) {
            $this->currentStep = 1;
        }
    }
    public function checkOtp()
    {
        if ($this->otpCode == $this->sentOtpCode) {
            $url = route('mail.send.verify', ['token' => $this->email]);
            ControllersMailController::sendVerificationEmail($this->name, $this->email, $url);
            $owner_id = Owner::create(
                [
                    'name' => $this->name,
                    'address' => $this->address,
                    'email' => $this->email,
                    'number' => $this->number,
                    'hasVerifiedEmail' => 1,
                ]
            )->id;

            $pet_id = Pet::create(
                [
                    'owner_id' => $owner_id,
                    'pet_name' => $this->pet_name,
                    'age' => $this->age,
                    'gender' => $this->gender,
                    'birthdate' => $this->birthdate,
                    'breed' => $this->breed,
                    'pet_type' => $this->pet_type,
                    'color' => $this->color,
                ]
            )->id;
            Appointment::create(
                [
                    'owner_id' => $owner_id,
                    'pet_id' => $pet_id,
                    'reason_id' => $this->reason_id,
                    'date' => $this->date,
                    'time' => $this->time,
                ]
            );
            alert()->success('SYSTEM MESSAGE', 'Appointment successfully created')->autoClose(7000)->width('500px')->animation('animate__fadeInRight', 'animate__fadeOutDown')->timerProgressBar();
            return redirect(request()->header('Referer'));
        } else {
            $this->attempt++;
            if ($this->attempt == $this->limit) {
                /* send another otp */
                session()->flash('info', 'We have sent you another OTP code.');
            }
        }
    }
    public function nextPhase()
    {
        $this->resetErrorBag();
        $this->validateData();
        if (!$this->checkIfThereIsAppointment()) {
            $this->sentOtpCode = rand(1000, 9999);
            $this->isDoneFirstPhase = true;
            $response = Nexmo::message()->send([
                'to'   => "63" . Str::substr($this->number, 1, 10),
                'from' => '09361681322',
                'text' => "Your OTP code is " . $this->sentOtpCode
            ]);
        } else {
            session()->flash('error', 'Too many appointments for this date and time');
        }
    }
    private function checkIfThereIsAppointment()
    {
        try {
            // Get all appointments for this date and time
            $appointments = Appointment::whereDate('date', $this->date)
                ->where('status', '!=', 'cancelled')
                ->where('time', $this->time)
                ->get();

            // If there are more than 3 appointments, return true
            if ($appointments->count() > 3) {
                return true;
            }

            // Otherwise, return false
            return false;
        } catch (\Exception $e) {
            // Handle any exceptions that may occur during the query
            // For example, log the error or return an error response
            Log::error('Error while getting appointments: ' . $e->getMessage());
            return false;
        }
    }
    public function updatedPetId($value)
    {
        $this->pet_id = $value;
        $this->pet = Pet::find($value);
        $this->dpet_name = $this->pet->pet_name;
        $this->dpet_type = $this->pet->pet_type;
        $this->dbirthdate = $this->pet->birthdate;
        $this->dage = $this->pet->age;
        $this->dgender = $this->pet->gender;
        $this->dbreed = $this->pet->breed;
        //push to array
        if ($this->selected_pets != null) {
            if ($this->selected_pets->count() > 0) {
                foreach ($this->selected_pets_ids as $key => $pet) {
                    if ($pet == $value) {
                        $this->selected_pets->forget($key);
                        $this->selected_pets_ids->forget($key);
                    }
                }
            }
        }
        //i amm getting error:  Call to a member function push() on null
        $this->selected_pets->push($this->pet->pet_name);
        $this->selected_pets_ids->push($this->pet->id);
    }
    public function removePetFromSelected($index)
    {
        //remove from array
        $this->selected_pets->forget($index);
        $this->selected_pets_ids->forget($index);
    }
    public function appointment()
    {
        $this->resetErrorBag();
        $this->validateData();
        if (!$this->checkIfThereIsAppointment()) {
            if ($this->isNewClient) {
                if ($this->isDoneFirstPhase) {
                    $this->checkOtp();
                }
            }
            if ($this->isOldClient) {
                if ($this->addPet) {
                    try {
                        $pet_id = Pet::create(
                            [
                                'owner_id' => $this->owner->id,
                                'pet_name' => $this->pet_name,
                                'age' => $this->age,
                                'gender' => $this->gender,
                                'birthdate' => $this->birthdate,
                                'breed' => $this->breed,
                                'color' => $this->color,
                                'pet_type' => $this->pet_type,
                            ]
                        )->id;
                        Appointment::create([
                            'owner_id' => $this->owner->id,
                            'pet_id' => $pet_id,
                            'reason_id' => $this->reason_id,
                            'date' => $this->date,
                            'time' => $this->time,
                        ]);
                    } catch (\Throwable $th) {
                        dd($th);
                    }
                } else {
                    foreach ($this->selected_pets_ids as $key => $pet) {
                        Appointment::create([
                            'owner_id' => $this->owner->id,
                            'pet_id' => $pet,
                            'reason_id' => $this->reason_id,
                            'date' => $this->date,
                            'time' => $this->time,
                        ]);
                    }
                }
                $this->selected_pets =  collect([]);
                $this->selected_pets_ids =  collect([]);
                $this->resetExcept(
                    'isOldClient',
                    'isNewClient',
                    'cancel',
                    'currentStep',
                    'owner',
                    'pets',
                    'hasEmail',
                    'services',
                    'addPet'
                );
                alert()->success('SYSTEM MESSAGE', 'Appointment successfully created')->autoClose(7000)->width('500px')->animation('animate__fadeInRight', 'animate__fadeOutDown')->timerProgressBar();
                return redirect(request()->header('Referer'));
            }
        } else {
            session()->flash('error', 'Too many appointments for this date and time');
        }
    }
    public function new()
    {
        $this->increment();
        $this->isNewClient = true;
    }
    public function old()
    {
        $this->increment();
        $this->isOldClient = true;
    }
    public function cancel()
    {
        $this->increment();
        $this->cancel = true;
    }
    public function no()
    {
        $this->cancelBtn = false;
    }
    /* function cancel button */
    public function cancelButton($id)
    {
        $this->cancelBtn = true;
        $this->cancelId = $id;
    }

    public function cancelAppointment($id)
    {
        $appointment = Appointment::find($id);
        if ($appointment->status == 'request' || $appointment->status == 'pending') {
            $appointment->update(['status' => 'cancelled', 'cancelled_by' => 'Client']);
            /* session success message */
            session()->flash('success', 'Appointment cancelled successfully');
        }
        $this->appointments = appointment::where('owner_id', '=',   $this->owner->id)->where(function ($query) {
            $query->where('status', '=', 'request')->orWhere('status', '=', 'pending');
        })->get();
    }
    public function verifyEmail()
    {
        $this->resetErrorBag();
        $this->validateData();
        try {
            $this->owner = Owner::where('email', '=', $this->emailAddress)->where('hasVerifiedEmail', '=', 1)->firstOrFail();
            if ($this->isOldClient) {
                $this->pets = Pet::where('owner_id', '=',   $this->owner->id)->get();
            } else {
                $this->appointments = appointment::where('owner_id', '=',   $this->owner->id)->where(function ($query) {
                    $query->where('status', '=', 'request')->orWhere('status', '=', 'pending');
                })->get();
            }
            $this->hasEmail = true;
        } catch (\Throwable $th) {
            $this->attempt++;
            if ($this->attempt > $this->limit) {
                /* redirect back */
                alert()->error('SYSTEM MESSAGE', ' Attempted too many times')->autoClose(5000)->width('500px')->animation('animate__fadeInRight', 'animate__fadeOutDown')->timerProgressBar();
                return redirect(request()->header('Referer'));
            } else {
                $this->addError('emailAddress', 'Email address not found or not verified');
                $this->hasEmail = false;
            }
        }
        # code...

    }
    public function back()
    {
        $this->decrement();
        $this->resetExcept('currentStep', 'services');
    }
    public function addPet()
    {
        $this->resetErrorBag();
        if ($this->addPet) {
            $this->addPet = false;
        } else {
            $this->addPet = true;
        }
    }
    public function mount()
    {
        $this->currentStep = 1;
        $this->selected_pets =  collect([]);
        $this->selected_pets_ids =  collect([]);
    }

    public function render()
    {
        /*   if ($this->cancel) {
            $this->appointments = appointment::where('owner_id', '=',   $this->owner->id)->where(function ($query) {
                $query->where('status', '!=', 'done')->orWhere('status', '!=', 'cancelled');
            })->get();
        } */

        return view('livewire.appointment.form');
    }
}
