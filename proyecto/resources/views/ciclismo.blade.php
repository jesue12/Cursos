<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>COSAS FITNESS</title>
    <x-app-layout>
      
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Yellowtail&display=swap" rel="stylesheet">

    
    <style>
        .cuadro {
            border: 1px solid #ccc;
            border-radius: 8px;
            padding: 20px;
            max-width: 300px;
            text-align: center;
            margin: 20px auto;
            box-shadow: 2px 2px 10px rgba(0, 0, 0, 0.1);
        }
        .cuadro img {
            max-width: 100%;
            height: auto;
            border-radius: 5px;
        }
        h2 {
            font-size: 24px;
            margin: 10px 0;
            font-family: "Yellowtail", cursive;
           font-weight: 400;
           font-style: normal;
        }
        p {
            font-size: 16px;
            color: #555;
            font-family: "Yellowtail", cursive;
           font-weight: 400;
           font-style: normal;
        }
    </style>
</head>
<body>

<div class="cuadro">
    <h2>Manejar Bici</h2>
    <img src="images/bici.jpg" alt="Imagen de ejemplo">
    <p>Salud física: Es un excelente ejercicio cardiovascular que mejora la resistencia, fortalece músculos y ayuda a controlar el peso.

        Salud mental: Montar en bicicleta puede reducir el estrés, la ansiedad y la depresión, promoviendo una sensación de bienestar.</p>
</div>

</x-app-layout>
<div class="grid gap-4">
    <div>
        <img class="h-auto max-w-full rounded-lg" src="https://flowbite.s3.amazonaws.com/docs/gallery/featured/image.jpg" alt="">
    </div>
    <div class="grid grid-cols-5 gap-4">
        <div>
            <img class="h-auto max-w-full rounded-lg" src="https://flowbite.s3.amazonaws.com/docs/gallery/square/image-1.jpg" alt="">
        </div>
        <div>
            <img class="h-auto max-w-full rounded-lg" src="https://flowbite.s3.amazonaws.com/docs/gallery/square/image-2.jpg" alt="">
        </div>
        <div>
            <img class="h-auto max-w-full rounded-lg" src="https://flowbite.s3.amazonaws.com/docs/gallery/square/image-3.jpg" alt="">
        </div>
        <div>
            <img class="h-auto max-w-full rounded-lg" src="https://flowbite.s3.amazonaws.com/docs/gallery/square/image-4.jpg" alt="">
        </div>
        <div>
            <img class="h-auto max-w-full rounded-lg" src="https://flowbite.s3.amazonaws.com/docs/gallery/square/image-5.jpg" alt="">
        </div>
    </div>
</div>

</body>
</html>
