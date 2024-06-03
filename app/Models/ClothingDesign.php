<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ClothingDesign extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'image_url',
        'description',
    ];

    public function getImagePathAttribute()
    {
        return asset('storage/'.$this->image_url);
    }
}
