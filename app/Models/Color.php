<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Color extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function animals()
    {
        return $this->hasMany(Animal::class);
    }
    public function image()
    {
        return $this->morphOne(Image::class,'imageable');
    }
}
