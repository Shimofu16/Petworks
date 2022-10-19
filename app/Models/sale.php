<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class sale extends Model
{
    protected $table = 'sales';
    public $guarded = [];
    public function product(){
        return $this->belongsTo(product::class,'product_id','id');
    }
}
