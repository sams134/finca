<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Lot extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function animals()
    {
        return $this->belongsToMany(Animal::class)->withTimestamps();
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
