<app-layout>
<h1>Actualizar un Usuario</h1>

    <form action="/works/{{ $works->id }}" method="POST">
        @csrf          
        @method('PUT')  
        <label>
            Marca:
            <input type="text" name="Nombre" value="{{ $works->Nombre }}" 
            placeholder="Ingrese el nuevo Nombre">
        </label><br><br>
        <label>
            Apellidos:
            <input type="text" name="apellido" value="{{ $works->Apellidos }}" 
            placeholder="Ingrese sus apellidos">
        </label><br><br>
        <label>
            Gmail:
            <input type="text" name="gmail" value="{{ $works->Gmail }}" 
            placeholder="Ingrese su Gmail">
        </label><br><br>
        <label>
            Contraseña:
            <input type="text" name="contraseña" value="{{ $works->Contraseña }}" 
            placeholder="Ingrese su contraseña">
        </label><br><br>
        <button type="submit"><a href="/works"> Actualizar</button>
    </form>

    <br>
    <br>
    <a href="/works">Regresar</a>
    <br><br>
</app-layout>