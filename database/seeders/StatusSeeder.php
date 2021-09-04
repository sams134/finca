<?php

namespace Database\Seeders;

use App\Models\Status;
use Illuminate\Database\Seeder;

class StatusSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        Status::create(['name'=>'Cargada']);
        Status::create(['name'=>'Parida']);
        Status::create(['name'=>'Vendido(a)']);
        Status::create(['name'=>'Desmadrado(a)']);
        Status::create(['name'=>'Listo Para vender']);
        Status::create(['name'=>'Enfermo(a)']);
        Status::create(['name'=>'Tronconero(a)']);
        Status::create(['name'=>'Medianero(a)']);
        Status::create(['name'=>'Puntero(a)']);
    }
}
