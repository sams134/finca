<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Suplement extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function animals()
    {
        return $this->belongsToMany(Animal::class)
                    ->withPivot(
                    [
                        'date',
                        'cant'
                    ]);
    }
    public function image()
    {
        return $this->morphOne(Image::class,'imageable');
    }
    public function documents()
    {
        return $this->morphMany(Document::class,'documentable');
    }
    public function logs()
    {
        return $this->morphMany(Log::class,'logable');
    }
}
