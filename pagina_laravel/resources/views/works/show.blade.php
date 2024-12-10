    <h1>Usuario seleccionado [{{ $works->id }}]</h1>
    <h3><b>Nombre: </b>{{ $works->Nombre }}</h3>
    <h3><b>Apellidos: </b>{{ $works->Apellidos}}</h3>
    <br>
    <br>
    
 
        <a href="/works/{{ $works->id }}/edit">Editar</a>
        <br><br>
        
        <form action="/works/{{ $works->id }}" method="POST">
            @csrf  
            @method('DELETE') 
            <button type="submit">Eliminar</button>
        </form>
        <br>
        <a href="/works">Regresar</a>
        <br><br>
