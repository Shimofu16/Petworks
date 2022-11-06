<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SoldProduct extends Model
{
    use HasFactory;
    protected $table = 'sold_products';
    public $guarded = [];
    public function appointment(){
        return $this->belongsTo(appointment::class,'appointment_id');
    }
    public function product(){
        return $this->belongsTo(product::class,'product_id');
    }
}
