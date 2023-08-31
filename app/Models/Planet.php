<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Planet extends Model
{
    protected $table = "planets";
    public function typeModel(){
        return $this->belongsTo("\App\Models\PlanetType","type","type");
    }
}