<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PlanetsController extends Controller
{
    public function show($id){
        return view('Planets.show',[
            'planet'=> \App\Models\Planet::find($id),
        ]);
        return \App\Models\Planet::find($id);
    }
    public function index(){
        return view('Planets.index',[
            'planet'=> \App\Models\Planet::all(),
        ]);
       
    }
}