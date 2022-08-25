<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pet extends Model
{
    protected $table = 'pets';
    public $timestamps = false;
    public $guarded = [];

    public function appointment(){
        return $this-> hasMany(Appointment::class,'pet_id');
    }

    public function owner (){
        return $this-> belongsTo(Owner::class,'owner_id');
    }
}
