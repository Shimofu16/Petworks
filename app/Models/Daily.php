<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Daily extends Model
{
    protected $table = 'dailies';
    public $guarded = [];
    public function appointment(){
        return $this->belongsTo(Appointment::class, 'appointment_id');
    } 

}
