<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;

class PlanetsTypeTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $planets_array= ["Terrestrial", "Gas", "Dwarf"];

        foreach($planets_array as $planet){
            DB::table('planets_type')->insert([
                'type' => $planet,
            ]);
        }
       
    }
}