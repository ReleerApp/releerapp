<?php ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../../css/style.css">
    <title>Filtro</title>
</head>
<body>
    <div class="pag-filtro">

        <h1 class="filtro">FILTROS BÚSQUEDA</h1>

        <div class="formulario-venta">
                <form>
                    <label for="nom-libro"></label>
                    <input type="text" name="nom-libro" placeholder="Nombre del libro">

                    <label for="nom-autor"></label>
                    <input type="text" name="nom-autor" placeholder="Nombre del autor">

                    <label for="genero"></label>

                    <select name="genero" aria-placeholder="Género del libro">
                        <option value="romance">Romance</option>
                        <option value="misterio">Misterio</option>
                        <option value="clasico">Clásico</option>
                        <option value="fantasia">Fantasia</option>
                    </select>

                    <label for="cod-ISBN"></label>
                    <input type="text" placeholder="ISBN">

                    <label for="precio"></label>
                    <input type="text" placeholder="Precio">
                    
                    <label for="estado del libro"></label>

                    <select name="estado del libro" aria-placeholder="Estado del libro">
                        <option value="casi-nuevo">Casi nuevo</option>
                        <option value="muy-bueno">Muy buen estado</option>
                        <option value="bueno">Buen estado</option>
                        <option value="regular">Regular</option>
                    </select>

                    <div class="buscar">
                        <button class="buscar-btn">BUSCAR</button>
                    </div>
                </form>
</body>
</html>