<h1>Editar Accesories</h1>

<form action="/accesories/{{ $accesories->id }}" method="POST">
    @csrf
    @method('PUT') {{-- Aqui se hace la solicitud para la actualización de los datos --}}

    <label for="Alerones">Alerones:
    <input type="text" id="Alerones" name="Alerones" value="{{ $accesories->alerones }}" placeholder="Ingresa el nombre de los alerones">
    </label><br><br>

    <label for="Llantas">Llantas:
    <input type="text" id="Llantas" name="Llantas" value="{{ $accesories->llantas }}" placeholder="Ingresa el tipo de llantas">
    </label><br><br>

    <label for="Rines">Rines:
    <input type="text" id="Rines" name="Rines" value="{{ $accesories->rines }}" placeholder="Ingresa el tipo de rines">
    </label><br><br>

    <label for="Aceite">Aceite:
    <input type="text" id="Aceite" name="Aceite" value="{{ $accesories->aceite }}" placeholder="Ingresa el tipo de aceite">
    </label><br><br>

    <label for="Viniles">Viniles:
    <input type="text" id="Viniles" name="Viniles" value="{{ $accesories->viniles }}" placeholder="Ingresa el tipo de viniles">
    </label><br><br>

    <button type="submit">Actualizar</button>
</form>

<br><br>
<a href="/accesories"> Cancelar y Regresar... </a>
