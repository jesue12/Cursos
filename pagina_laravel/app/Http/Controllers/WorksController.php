<?php

namespace App\Http\Controllers;

use App\Models\Works;
use Illuminate\Http\Request;

class WorksController extends Controller
{
    public function index() {
        $work = Works::all();
        return view('works.index',[
            'works'=> $work
        ]);
    
        
    }
    public function create() {
        return view('works.create');
        
    }
    public function show($disp) {
            $work = Works::find($disp);//búsqueda del registro con ID $disp
            return view('works.show',[
                'works'=> $work
            ]);
        }
        
        public function store(Request $request){
        
            //return request()->all(); /*CON ESTE CÓDIGO PODEMOS VER LO QUE TRAE*/
                                                                     /*EL FORMULARIO */
            
            $work = new Works();
            $work->Nombre = $request->Nombre;
            $work->Apellidos = $request->Apellido;
            $work->Gmail = $request->Gmail;
            $work->Contraseña = $request->Contraseña;

            
            $work->save();
    
            return redirect('/works');
    
        }
        public function edit($disp){
            $work = Works::find($disp);
            return view('works.edit',[
                'works'=> $work
            ]);
        }
        public function update(Request $request, $disp){
            $work = Works::find($disp);
            $work->Nombre = $request->Nombre;
            $work->Apellidos = $request->apellido;
            $work->Gmail = $request->gmail;
            $work->Contraseña = $request->contraseña;

            $work->save();
            return redirect('/works/'.$work->id.'/edit');
    }
   
public function destroy($disp)
    {
        //return "Computer eliminada".$disp;
        $work = Works::find($disp);
        $work->delete();

        return redirect('/works');
    }

    }