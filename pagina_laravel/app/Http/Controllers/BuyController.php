<?php

namespace App\Http\Controllers;

use App\Models\Buys;
use Illuminate\Http\Request;

class BuyController extends Controller
{
    public function index(){
        $buy = Buys::orderBy('id','desc')->get();

        return view('buy.index',[
            'buy'=> $buy
        ]);
        
    }


public function create(){
    return view('buy.create');
}

public function show($disp){
        $buy = Buys::find($disp);//búsqueda del registro con ID $disp
        return view('buy.show',[
            'buy'=> $buy
        ]);
    }
    public function store(Request $request){

        //return request()->all(); /*CON ESTE CÓDIGO PODEMOS VER LO QUE TRAE*/
															     /*EL FORMULARIO */
                                                                                                              
                                                                
        $buy = new Buys();
        $buy->nombre_cliente = $request->nombre;
        $buy->modelo_auto = $request->modelo;
        $buy->año = $request->año;
        $buy->precio = $request->precio;
        $buy->fecha_compra = $request->fecha;
        $buy->save();

        return redirect('/buy');

    }
    public function edit($disp){
        $buy = Buys::find($disp);
        return view('buy.edit',[
            'buy'=> $buy
        ]);
    }
    public function update(Request $request, $disp){
        $buy = Buys::find($disp);
        $buy->nombre_cliente = $request->nombre;
        $buy->modelo_auto = $request->modelo;
        $buy->año = $request->año;
        $buy->precio = $request->precio;
        $buy->fecha_compra = $request->fecha;
        $buy->save();
        return redirect('/buy/'.$buy->id.'/edit');
    }
    public function destroy($disp)
    {
        $buy = Buys::find($disp);
        $buy->delete();

        return redirect('/buy');
    }
}

