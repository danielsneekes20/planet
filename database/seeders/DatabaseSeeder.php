<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;
class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
       $this->call([
           //CreatePlanetsTypeTabel::class,
           //CreatePlanetsTable::class,
           
           PlanetsTypeTableSeeder::class,
           DwarfTypePlanetsSeeder::class,
           GasTypePlanetsSeeder::class,
           TerrestrialTypePlanetsSeeder::class,

       ]);
    }
}