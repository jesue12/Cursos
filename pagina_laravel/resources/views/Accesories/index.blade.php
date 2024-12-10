@extends('layouts.app')  <!-- se declara que se extenderá la plantilla padre -->
@section('content')

<body class="p-3 m-0 border-0 bd-example m-0 border-0">
    <h1>Lista de Accesorios</h1>
    <hr class="border border-danger border-2 opacity-50">

    <h4><a href="/accesories/create">Nuevo accesorio</a></h4>
  
    <table class="table table-success table-striped">
        <thead>
            <tr>
                <th>Nombre Accesorio</th>
                <th>Opciones</th>
                
            </tr>
        </thead>
        <tbody>
            @foreach ($accesories as $accs)
            <tr>
                <td> <a href="accesories/{{ $accs->id }}">{{$accs->alerones;}}</a></td>
                   <td>   <a href="accesories/{{ $accs->id }}/edit">[Editar]</a>
                    <a href="accesories/{{ $accs->id }}">[Eliminar]</a>
            </tr>
            @endforeach
        </tbody>
      </table>
   
    </ul>
    <button><a href="/home">Regresar al Menu</button>
    </body>

        @endsection
