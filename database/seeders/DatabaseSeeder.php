<?php

namespace Database\Seeders;

use App\Models\Deal_type;
use App\Models\Owner;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        $this->call(ColorSeeder::class);
        $this->call(BreedSeeder::class);
        $this->call(OwnerSeeder::class);
        $this->call(Deal_typeSeeder::class);
    }
}
