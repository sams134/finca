<?php

namespace Database\Seeders;

use App\Models\Breed;
use Illuminate\Database\Seeder;

class BreedSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        Breed::create(['name' => 'Simbrah']);
        Breed::create(['name' => 'Simmental']);
        Breed::create(['name' => 'Brahman']);
        Breed::create(['name' => 'Santa Gertrudis']);
        Breed::create(['name' => 'Angus']);
    }
}
