<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Animal extends Model
{
    use HasFactory;

    public const GENDER_MALE = 1;
    public const GENDER_FEMALE = 2;


    protected $guarded = ['id'];

    public function breed()
    {
        return $this->belongsTo(Breed::class);
    }
    public function color()
    {
        return $this->belongsTo(Color::class);
    }
    public function owners()
    {
        return $this->belongsToMany(Owner::class);
    }
    public function statuses()
    {
        return $this->belongsToMany(Status::class);
    }
    public function deals()
    {
        return $this->belongsToMany(Deal::class);
    }
    public function suplements()
    {
        return $this->belongsToMany(Suplement::class)
                        ->withPivot(
                            [
                                'date',
                                'cant'
                            ]);
    }
    public function deal_type()
    {
        return $this->belongsTo(Deal_type::class);
    }
    public function medicines()
    {
        return $this->belongsToMany(Medicine::class)
                    ->withPivot(
                        [
                            'mls',
                            'date',
                            'applied_by',
                            'description'
                        ]);
    }
    public function weights()
    {
        return $this->hasMany(Weight::class);
    }
    public function animal_type()
    {
        return $this->belongsTo(Animal_type::class);
    }
    public function lots()
    {
        return $this->belongsToMany(Lot::class)->withTimestamps();
    }
    public function paddock()
    {
        return $this->belongsTo(Paddock::class);
    }
    public function seed()
    {
        return $this->belongsToMany(Animal::class,'seeds','cow_id','calf_id','id','id');
    }
    public function images()
    {
        return $this->morphMany(Image::class,'imageable');
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
