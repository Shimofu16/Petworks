<?php

namespace App\Http\Livewire\Owner;

use App\Models\Appointment;
use App\Models\Pet;
use App\Models\service;
use Livewire\Component;
use Livewire\WithFileUploads;
use Livewire\WithPagination;

class Show extends Component
{
    use WithFileUploads, WithPagination;
    public $owner;
    public $appointments;
    public $consultations = [];
    public $pet_id = '';
    public $pet = [];
    public $pet_name;
    public $pet_type;
    public $pet_birthdate;
    public $pet_age;
    public $pet_gender;
    public $pet_breed;
    public $reason_id;
    public $title;
    /* Edit */
    public $picture;
    public $comment;
    protected $paginationTheme = 'bootstrap';
    protected $queryString = ['pet_id'];

    public function edit($appointment_id, $pet_id)
    {

        try {
            $appointment = Appointment::findOrFail($appointment_id);
            $pet = Pet::findOrFail($pet_id);
            $path = 'uploads/appointment/' . $appointment->name . '/' . $pet->pet_name . '/' . $appointment->service->service;

            $extension = $this->picture->getClientOriginalExtension();
            $file_name = $appointment->service->service . '.' . $extension;
            $appointment->image_name = $file_name;
            $appointment->path = $path . '/' . $file_name;
            if (!empty($this->comment)) {
                $appointment->comment = $this->comment;
            }
            $this->picture->storeAs($path, $file_name);
            $appointment->update();
            session()->flash('message', 'Data successfully updated.');
            $this->reset(['picture', 'comment']);
        } catch (\Throwable $th) {
            session()->flash('error', $th);
        }
    }
    public function render()
    {
        if (!empty($this->pet_id)) {
            $this->pet = Pet::find($this->pet_id);
            $this->pet_name = $this->pet->pet_name;
            $this->pet_type = $this->pet->pet_type;
            $this->pet_birthdate = $this->pet->birthdate;
            $this->pet_age = $this->pet->age;
            $this->pet_gender = $this->pet->gender;
            $this->pet_breed = $this->pet->breed;
            return view('livewire.owner.show', [
                'services' => Appointment::where('owner_id', '=', $this->owner->id)
                    ->where('status', '=', 'done')
                    ->where('pet_id', '=', $this->pet_id)
                    ->paginate(5),
            ]);
        }
        return view('livewire.owner.show', [
            'services' => Appointment::where('owner_id', '=', $this->owner->id)
                ->where('status', '=', 'done')
                ->paginate(5),
        ]);
        /* if (!empty($this->reason_id)) {
            $this->title = service::find($this->reason_id);
            $this->consultations = Appointment::where('owner_id', '=', $this->owner->id)
                ->where('pet_id', '=', $this->pet_id)
                ->where('reason_id', '=', $this->reason_id)
                ->get();
        } */
    }
}
