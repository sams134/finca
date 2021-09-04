<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Asset extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function works()
    {
        return $this->morphMany(Work::class,'workable');
    }

    public function logs()
    {
        return $this->morphMany(Log::class,'logable');
    }

    public function images()
    {
        return $this->morphMany(Image::class,'imageable');
    }
    public function documents()
    {
        return $this->morphMany(Document::class,'documentable');
    }
    
}
