<?php

namespace App\Http\Livewire\Appointment;

use App\Models\Appointment;
use App\Models\Owner;
use App\Models\Pet;
use Livewire\Component;

class Form extends Component
{

    public $services;
    /* steps */
    public $currentStep;
    public $totalStep;
    public $isNewClient = false;
    public $isOldClient = false;

    /* Old client */
    public $hasEmail = false;
    public $emailAddress;
    public $otp;
    public $pets;
    public $pet_id;
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

    /* appointment */
    public $reason_id;
    public $date;
    public $time;
    protected $rules = [
        'date' => 'required',
        'time' => 'required',
    ];
    public function updated()
    {
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
    public function appointment()
    {
        if ($this->isNewClient) {
            $owner_id = Owner::create(
                [
                    'name' => $this->name,
                    'address' => $this->address,
                    'email' => $this->email,
                    'number' => $this->number,
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
        }
        if ($this->isOldClient) {
            if ($this->addPet) {
                $pet_id = Pet::create(
                    [
                        'owner_id' => $this->owner->id,
                        'pet_name' => $this->pet_name,
                        'age' => $this->age,
                        'gender' => $this->gender,
                        'birthdate' => $this->birthdate,
                        'breed' => $this->breed,
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
            } else {
                Appointment::create([
                    'owner_id' => $this->owner->id,
                    'pet_id' => $this->pet->id,
                    'reason_id' => $this->reason_id,
                    'date' => $this->date,
                    'time' => $this->time,
                ]);
            }
        }
        $this->reset();
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
    public function verifyEmail()
    {
        try {
            $this->owner = Owner::where('email', '=', $this->emailAddress)->firstOrFail();
            $this->pets = Pet::where('owner_id', '=',   $this->owner->id)->get();
            $this->hasEmail = true;
        } catch (\Throwable $th) {
            $this->addError('emailAddress', 'Invalid Email');
            $this->hasEmail = false;
        }
    }
    public function addPet()
    {
        if ($this->addPet) {
            $this->addPet = false;
        } else {
            $this->addPet = true;
        }
    }
    public function mount()
    {
        $this->currentStep = 1;
    }

    public function render()
    {
        if ($this->isOldClient == true && $this->hasEmail == true) {
            if (!empty($this->pet_id)) {
                $this->pet = Pet::find($this->pet_id);
                $this->dpet_name = $this->pet->pet_name;
                $this->dpet_type = $this->pet->pet_type;
                $this->dbirthdate = $this->pet->birthdate;
                $this->dage = $this->pet->age;
                $this->dgender = $this->pet->gender;
                $this->dbreed = $this->pet->breed;
            }
        }
        return view('livewire.appointment.form');
    }
}
