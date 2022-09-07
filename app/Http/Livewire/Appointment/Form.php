<?php

namespace App\Http\Livewire\Appointment;

use Livewire\Component;

class Form extends Component
{
    public $date;
    public $time;
    protected $rules = [
        'date' => 'required',
        'time' => 'required',
    ];
    public function render()
    {
        return view('livewire.appointment.form');
    }
}
