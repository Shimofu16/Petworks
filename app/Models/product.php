<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class product extends Model
{
    protected $table = 'products';
    public $guarded = [];
    public function category(){
        return $this->belongsTo(category::class,'category_id');
    }
    public function sales(){
        return $this->hasMany(sale::class,'product_id');
    }
}
