@extends('layouts.app')  <!-- se declara que se extenderá la plantilla padre -->
@section('content')


  <body class="p-3 m-0 border-0 bd-example m-0 border-0">
    <h1>Lista de ventas</h1>
    <hr class="border border-danger border-2 opacity-50">

    <h4><a href="/buy/create">Nueva Venta</a></h4>
  
    <table class="table table-success table-striped">
        <thead>
            <tr>
                <th>Nombre del Cliente</th>
                <th>Opciones</th>
                
            </tr>
        </thead>
        <tbody>
            @foreach ($buy as $buys)
            <tr>
                <td> <a href="buy/{{$buys->id}}">{{$buys->nombre_cliente;}}</a></td>
                   <td> <a href="/buy/{{ $buys->id }}/edit">[EDITAR] </a>
                       <a href="/buy/{{$buys->id}}">[Eliminar] </a></td>
            </tr>
            @endforeach
        </tbody>
      </table>
   
    </ul>
    <button><a href="/home">Regresar al Menu</button>
    </body>

        @endsection

