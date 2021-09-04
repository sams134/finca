<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Loan extends Model
{
    use HasFactory;

    public const LOAN_PAID = 1;
    public const LOAN_UNPAID = 2;
    public const LOAN_GRANTED = 3;

    protected $guarded = [];

    public function worker()
    {
        return $this->belongsTo(Worker::class);
    }
    public function logs()
    {
        return $this->morphMany(Log::class,'logable');
    }
}
