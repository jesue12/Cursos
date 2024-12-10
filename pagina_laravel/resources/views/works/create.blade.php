
    <h1>Crear un Usuario</h1>

    <form action="/works" method="POST"> 
        @csrf  
        
        <label>
            Nombre:
            <input type="text" name="Nombre" placeholder="Ingrese su Nombre" required>
        </label><br><br>
        <label>
            Apellidos:
            <input type="text" name="Apellido" placeholder="Ingrese su Apellido" required>
        </label><br><br>
        <label>
            Gmail:
            <input type="text" name="Gmail" placeholder="Ingrese su Gmail" required>
        </label><br><br>
        <label>
            Contraseña:
            <input type="text" name="Contraseña" placeholder="Ingrese su Contraseña" required>
        </label><br><br>
          
        <button type="submit">Registrar</button>
    </form>

    <br>
    <br>
    <a href="/works">Regresar</a>
    <br><br>
