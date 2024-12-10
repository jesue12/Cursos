<h1>Cliente seleccionado [{{ $buy->id }}]</h1>
<h3><b>nombre_cliente: </b>{{ $buy->nombre_cliente}}</h3>
<h3><b>Modelo: </b>{{ $buy->modelo_auto }}</h3>
<br>
<br>

    <a href="/buy/{{ $buy->id }}/edit">Editar</a>
    <br><br>
    <form action="/buy/{{ $buy->id }}" method="POST">
        @csrf  
        @method('DELETE')  
        <button type="submit">Eliminar</button>
    </form>
    <br>
    <a href="/buy">Regresar</a>
    <br><br>

   
