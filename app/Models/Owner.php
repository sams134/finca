<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Owner extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function bank_accounts()
    {
        return $this->hasMany(Bank_account::class);
    }

    public function animals()
    {
        return $this->belongsToMany(Animal::class);
    }
    public function image()
    {
        return $this->morphOne(Image::class,'imageable');
    }
    public function logs()
    {
        return $this->morphMany(Log::class,'logable');
    }
}
