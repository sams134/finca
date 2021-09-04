<?php

namespace Database\Seeders;

use App\Models\Owner;
use Illuminate\Database\Seeder;

class OwnerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        Owner::create(['name'=>'Armando Mayorga', 'phone1' => '5206-9886','address' => 'Ciudad Guatemala','Description'=>'Dueño de la finca']);
        Owner::create(['name'=>'Irma de Mayorga', 'phone1' => '5901-6592','address' => 'Ciudad Guatemala','Description'=>'Dueña de la finca']);
        Owner::create(['name'=>'Orlando Espino', 'phone1' => '','address' => 'Pusila Peten','Description'=>'Dueño de la antigua finca de miguel ramirez']);
    }
}
