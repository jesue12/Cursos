<h1>Registrar nuevo accesorio</h1>

<form action="/accesories" method="POST">
    @csrf

    <label for="Alerones">Alerones:</label>
    <input type="text" id="Alerones" name="Alerones" placeholder="Ingresa el nombre de los alerones" required><br><br>

    <label for="Llantas">Llantas:</label>
    <input type="text" id="Llantas" name="Llantas" placeholder="Ingresa el tipo de llantas" required><br><br>

    <label for="Rines">Rines:</label>
    <input type="text" id="Rines" name="Rines" placeholder="Ingresa el tipo de rines" required><br><br>

    <label for="Aceite">Aceite:</label>
    <input type="text" id="Aceite" name="Aceite" placeholder="Ingresa el tipo de aceite" required><br><br>

    <label for="Viniles">Viniles:</label>
    <input type="text" id="Viniles" name="Viniles" placeholder="Ingresa el tipo de viniles" required><br><br>

    <button type="submit">Registrar</button>
</form>

<br><br>
<a href="/accesories">Regresar</a>


