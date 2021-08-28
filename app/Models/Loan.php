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
}
