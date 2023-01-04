<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Photos extends Model
{
    use HasFactory;
    protected $table = 'photos';
    public $guarded = [];

    public function album(){
        return $this->belongsTo(album::class,'album_id');
    }
}
