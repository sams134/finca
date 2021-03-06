<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Deal extends Model
{
    use HasFactory;

    public const PAID_STATUS_PAID = 1;
    public const PAID_STATUS_UNPAID = 2;
    public const PAID_STATUS_HALFPAID = 3;
    public const PAID_STATUS_GRANTED = 4;

    public const DEAL_BUY = 1;
    public const DEAL_SELL = 2;

    protected $guarded = [];

    public function animals()
    {
        return $this->belongsToMany(Animal::class)->withTimestamps();
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
