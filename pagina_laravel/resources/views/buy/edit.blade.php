
    <h1>Actualizar una Venta</h1>

    <form action="/buy/{{ $buy->id}}" method="POST">
        @csrf            
        @method('PUT')  
        <label>
            Nombre cliente:
            <input type="text" name="nombre" value="{{ $buy->nombre_cliente }}" 
            placeholder="Ingrese el nombre">
        </label><br><br>
        <label>
            Modelo auto:
            <input type="text" name="modelo" value="{{ $buy->modelo_auto }}" 
            placeholder="Ingrese el modelo">
        </label><br><br>
        <label>
            Año:
            <input type="text" name="año" value="{{ $buy->año }}" 
            placeholder="Ingrese el año">
        </label><br><br>
        <label>
            Precio:
            <input type="text" name="precio" value="{{ $buy->precio }}" 
            placeholder="Ingrese el precio">
        </label><br><br>
        <label>
            Modelo auto:
            <input type="text" name="modelo" value="{{ $buy->modelo_auto }}" 
            placeholder="Ingrese el modelo">
        </label><br><br>
        <label>
            Fecha de Compra:
            <input type="date" name="fecha" value="{{ $buy->fecha_compra }}">
        </label><br><br>
        
        <button type="submit">Actualizar</button>
    </form>

    <br>
    <br>
    <a href="/buy">Regresar</a>
    <br><br>