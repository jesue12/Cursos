<h1>Accesorio seleccionado [{{ $accesories->id }}]</h1>

<h3><b>Alerones: </b> {{ $accesories->alerones }} </h3>
<h3><b>Llantas: </b> {{ $accesories->llantas }} </h3>
<h3><b>Rines: </b> {{ $accesories->rines }} </h3>
<h3><b>Aceites: </b> {{ $accesories->aceite }} </h3>
<h3><b>Viniles: </b> {{ $accesories->viniles }} </h3>

<br><br>

{{-- <a href="/accesories/{{ $accesories->id }}/edit">Editar</a> --}} 
<form action="/accesories/{{ $accesories->id }}" method="POST">
    @csrf  
    @method('DELETE') 

    <button type="submit">Eliminar</button>
</form>
<br>
<a href="/accesories"> Cancelar y Regresar... </a>
<br><br>