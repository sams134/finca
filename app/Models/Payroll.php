<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Payroll extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function workers()
    {
        return $this->belongsToMany(Worker::class)->withPivot(
            [
                'salary',
                'description',
                'date'
            ]);
    }
    public function documents()
    {
        return $this->morphMany(Document::class,'documentable');
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
