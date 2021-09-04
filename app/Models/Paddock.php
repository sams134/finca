<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Paddock extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function farm()
    {
        return $this->belongsTo(Farm::class);
    }
    public function animals()
    {
        return $this->hasMany(Animal::class);
    }
    public function workers()
    {
        return $this->belongsToMany(Worker::class);
    }
    public function images()
    {
        return $this->morphMany(Image::class,'imageable');
    }
    public function works()
    {
        return $this->morphMany(Work::class,'workable');
    }
    public function logs()
    {
        return $this->morphMany(Log::class,'logable');
    }
}
