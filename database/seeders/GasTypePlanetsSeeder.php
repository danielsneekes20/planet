<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;
class GasTypePlanetsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $planets_array= ["Jupiter", "Saturn"];

        foreach($planets_array as $planet){
            DB::table('planets')->insert([
                'name' => $planet,
                'type'=> "Gas"
            ]);
        }
       
    }
}