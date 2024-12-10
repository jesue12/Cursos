<!DOCTYPE html>
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Oswald:wght@200..700&family=Poppins:wght@400;700&display=swap');
     
        body {
background-color:white;
font-family: "Poppins", sans-serif;
  font-weight: 400;
  font-style: normal;
  
        }
        
        .logo {
    display: flex;
    justify-content: center; /* Centra el contenido horizontalmente */
  
    width: 30%; 
    height: auto; /* Ajusta la altura automáticamente según el contenido */
    margin: 20px auto; /* Centra el div horizontalmente con un margen automático */
    padding: 0px; /* Espacio interno opcional */
    border-radius: 10px; /* Opcional: esquinas redondeadas */
}
 


.logo img {
    width: 70%; /* Ajusta el tamaño de la imagen */

}

    .section {
    display: flex; 
    justify-content: flex-start; 
    align-items: center; 
    gap: 90px; 
}

.section a {
    color: #000;
    font-size: 20px;
    font-weight: bold;
    text-decoration: none; 
    padding: 0 5px; 
}
.parrafo{
    text-align:justify;
}

    </style>
</head>

<body>
    <div>
    <div class="logo">
        <img src="/images/LogoF.png">
    </div>
<div class="section">

    <a class="home" href="/home" rel="noopener noreferrer">Home
        <img src="./images/bxs-home.svg" alt="home">



<a class="gara" href="/garage" rel="noopener noreferrer">Garage
    <img src="./images/bxs-car-garage.svg" alt="Garage">
</a>

<a class="User" href="/works" rel="noopener noreferrer">User
    <img src="./images/bxs-user.svg" alt="Garage">
</a>
<a class="accesories" href="/accesories" rel="noopener noreferrer">Accesories
  <img src="/images/basket2-fill.svg" alt="Garage">
</a>
<a class="Buy" href="/buy" rel="noopener noreferrer">Sales
<img src="/images/cash.svg" alt="buy">
</a>

<div class="search-section">
    <img class="search-icon" src="./images/bx-search.svg" alt="search">
    <input class="search-input" type="text" placeholder="Buscar">
  </div>
</div>
<br><br>
<h1>Lista de carros que contamos
</h1>

<table class="table">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">Modelo</th>
        <th scope="col">Precio</th>
        <th scope="col">Foto ilustrativa</th>
      </tr>
    </thead>
    <tbody class="table-group-divider">
      <tr>
        <th scope="row">1</th>
        <td><a href="/ferrariItalia"> Ferrari 458 Italia</td>
        <td>$2,600,000</td>
        <td><img src="/images/Ferrari_458_Italia.png"></td>
      </tr>
      <tr>
        <th scope="row">2</th>
        <td><a href="/ferrari458Speciale">Ferrari 458 Speciale</td>
        <td>$3,000,000</td>
        <td><img src="/images/Ferrari_458_Speciale.png"></td>
      </tr>
      <tr>
        <th scope="row">3</th>
        <td><a href="/ferrarif12">Ferrari F12 berlinetta</td>
        <td>$4,500,000</td>
        <td><img src="/images/Ferrari_F12_berlinetta.png"></td>

      </tr>
      <tr>
        <th scope="row">4</th>
        <td><a href="/ferrariSF90">Ferrari SF90 Stradale</td>
        <td>$5,500,000</td>
        <td><img src="/images/Ferrari_SF90_Stradale.png"></td>
      </tr>
    </tbody>
  </table>
</div>



</body>
</html>