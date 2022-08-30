<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class service extends Model
{
    use HasFactory;
    public $guarded = [];

    public function appointments()
    {
        return $this->hasMany(service::class, 'reason_id');
    }
}
