<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FerrariSF90Controller extends Controller
{
    public function index(){
        $nombre= 'Ferrari SF90 Stradale';
        $precio='Precio aproximado: $8,100,000 MXN';
        return view("garage.ferrariSF90Stradale")
        ->with('nombrecarro',$nombre)
        ->with('preciocarro',$precio);
    }
}

