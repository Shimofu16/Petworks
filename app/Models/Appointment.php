<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Appointment extends Model
{
    protected $table = 'appointments';
    public $timestamps = false;
    public $guarded = [];

    public function owner()
    {
        return $this->belongsTo(Owner::class, 'owner_id');
    }

    public function pet()
    {
        return $this->belongsTo(Pet::class, 'pet_id');
    }
    public function service()
    {
        return $this->belongsTo(service::class, 'reason_id');
    }
    public function doctor()
    {
        return $this->belongsTo(Doctor::class, 'doctor_id');
    }
}
