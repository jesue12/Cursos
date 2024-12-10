<h1>Nueva Venta</h1>

    <form action="/buy" method="POST">
        @csrf   
                 
          
        <label>
            Nombre cliente:
            <input type="text" name="nombre" placeholder="nombre" required>
        </label><br><br>
        <label>
            Nombre auto:
            <input type="text" name="modelo" placeholder="modelo" required>
           
        </label><br><br>
        Año:
            <input type="text" name="año" placeholder="año"required>
        </label><br><br>
        Precio:
        <input type="text" name="precio" placeholder="precio" required>
    </label><br><br>
        
    <label>
        Fecha de compra:
        <input type="date" name="fecha" required>
    </label><br><br>
        
        <button type="submit">Registrar</button>
    </form>

    <br>
    <br>
    <a href="/buy">Regresar</a>
    <br><br>