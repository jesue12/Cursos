<?php

namespace App\Http\Controllers;

use App\Models\Accessories;
use Illuminate\Http\Request;

class AccessoriesController extends Controller
{
    public function index(){
        $accesories = Accessories::orderBy('id','desc')->get();
        return view('Accesories.index', compact('accesories'));   
    }
 
    public function create(){
        return view('Accesories.create');
    }

    public function edit($disp) {
    $accesories = Accessories::findOrFail($disp);
    return view('Accesories.edit',  [
        'accesories' =>$accesories
    ]);
    }

    public function show($disp){
        $accesories = Accessories::find($disp);
        return view('Accesories.show', [
        'accesories'=> $accesories
        ]);
    }

    public function store(Request $request){
        
        $accesories = new Accessories();
        $accesories->Alerones = $request->Alerones;
        $accesories->Llantas = $request->Llantas;
        $accesories->Rines = $request->Rines;
        $accesories->Aceite = $request->Aceite; 
        $accesories->Viniles = $request->Viniles;       
        //dd($accesories); 
        $accesories->save();
    
        return redirect('/accesories');
    
    }

    public function update(Request $request, $disp){
        $accesories = Accessories::find($disp);
        $accesories->Alerones = $request->Alerones;
        $accesories->Llantas = $request->Llantas;
        $accesories->Rines = $request->Rines;
        $accesories->Aceite = $request->Aceite;
        $accesories->Viniles = $request->Viniles;        
        $accesories->save();
        return redirect('/accesories/'. $accesories->id .'/edit');
    }

    public function destroy($disp){
        $accesories = Accessories::find($disp);
        $accesories->delete();

        return redirect('/accesories/');
    }
}

