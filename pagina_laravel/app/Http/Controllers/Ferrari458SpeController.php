<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Ferrari458SpeController extends Controller
{
    public function index(){
        $nombre='Ferrari 458 Speciale';
        return view("garage.ferrari458Speciale")
         ->with('nombre',$nombre);
    }
}



