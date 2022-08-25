<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Owner extends Model
{
    protected $table = 'owners';
    public $timestamps = false;
    public $guarded = [];

    public function appointment(){
        return $this-> hasMany(Appointment::class,'owner_id');
    }

    public function pets(){
        return $this-> hasMany(Pet::class,'owner_id');
    }

}
