<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class category extends Model
{
    protected $table = 'categories';
    public $guarded = [];
public function products(){
    return $this->hasMany(product::class,'category_id');
}
}
