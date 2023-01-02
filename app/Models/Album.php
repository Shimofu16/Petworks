<?php

namespace App\Models;

use App\Models\model\Photos;
use App\Models\Photos as ModelsPhotos;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Album extends Model
{
    use HasFactory;
    protected $table = 'albums';
    public $guarded = [];
    public function photos()
    {
        return $this->hasMany(ModelsPhotos::class, 'album_id');
    }

}
