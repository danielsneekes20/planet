<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PlanetType extends Model
{
    protected $table ="planets_type";

    public function allPlanets(){
       return $this->hasMany('\App\Models\Planet',"type","type");
    }
}