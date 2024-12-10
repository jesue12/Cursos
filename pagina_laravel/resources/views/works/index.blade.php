@extends('layouts.app')  <!-- se declara que se extenderá la plantilla padre -->
@section('content')
 
<body class="p-3 m-0 border-0 bd-example m-0 border-0">
    <h1>Lista de Usuarios</h1>
    <hr class="border border-danger border-2 opacity-50">

    <h4><a href="/works/create">Nuevo usuario</a></h4>
  
    <table class="table table-success table-striped">
        <thead>
            <tr>
                <th>Nombre del Usuario</th>
                <th>Opciones</th>
                
            </tr>
        </thead>
        <tbody>
            @foreach ($works as $Works)
            <tr>
                <td><a href="works/{{ $Works->id }}">{{$Works->Nombre}}</a></td>
                   <td>    <a href="/works/{{ $Works->id }}/edit">[EDITAR]</a>
                    <a href="/works/{{ $Works->id }}">[Eliminar]</a>
            </tr>
            @endforeach
        </tbody>
      </table>
   
    </ul>
    <button><a href="/home">Regresar al Menu</button>
    </body>

        @endsection
 