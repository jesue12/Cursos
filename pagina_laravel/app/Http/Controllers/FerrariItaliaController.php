<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FerrariItaliaController extends Controller
{
    public function index(){
        $nombrecarro= "Ferrari 458 Italia";
        return view("garage.ferrariItalia")
        ->with('nombrecarro', $nombrecarro);
        
    }
}


