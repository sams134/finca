<?php

namespace Database\Seeders;

use App\Models\Deal_type;
use Illuminate\Database\Seeder;

class Deal_typeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        Deal_type::create(['name' => 'Crianza Propia','description'=>'Son hembras nacidas en la finca. Se usaran para criar mas animales']);
        Deal_type::create(['name' => 'Engorde Propio','description'=>'Son machos nacidos en la finca. Se venden como propios']);
        Deal_type::create(['name' => 'A medias por peso','description'=>'La diferencia de peso se reparte por mitad']);
        Deal_type::create(['name' => 'A medias por precio','description'=>'']);
    }
}
