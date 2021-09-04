<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Work extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function workable()
    {
        return $this->morphTo();
    }
    public function worker()
    {
        return $this->belongsTo(Worker::class);
    }
    public function logs()
    {
        return $this->morphMany(Log::class,'logable');
    }
}
