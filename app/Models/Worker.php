<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Worker extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function works()
    {
        return $this->hasMany(Work::class);
    }
    public function loans()
    {
        return $this->hasMany(Loan::class);
    }
    public function paddocks()
    {
        return $this->belongsToMany(Paddock::class);
    }
    public function worker_type()
    {
        return $this->belongsTo(Worker_type::class);
    }
    public function payrolls()
    {
        return $this->belongsToMany(Payroll::class)->withPivot(
            [
                'salary',
                'description',
                'date'
            ]);
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
