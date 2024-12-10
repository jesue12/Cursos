<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Ferrari458Controller extends Controller
{
    public function index(){
        return view('garage.ferrari458');
    }
}
