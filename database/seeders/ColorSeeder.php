<?php

namespace Database\Seeders;

use App\Models\Color;
use Illuminate\Database\Seeder;

class ColorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        Color::create(['name' => 'Blanco']);
        Color::create(['name' => 'Prieto']);
        Color::create(['name' => 'Hosco']);
        Color::create(['name' => 'Bermejo']);
    }
}
