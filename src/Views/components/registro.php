<?php ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../css/style.css">    
    <title>Registro</title>
</head>
<body>
    <?php include("./components/header.php"); ?>
<div class="pag-reg">
    <h1 class="reg-titulo">REGISTRO</h1>

    <div class="registro">
        <form action="/">
            <label for="nom-usuario"></label>
            <input type="text" name="nom-usuario" placeholder="Nombre y Apellido">

            <label for="email-usuario"></label>
            <input type="text" name="email-usuario" placeholder="Correo Electrónico">

            <label for="ubicacion-usuario"></label>
            <input type="text" name="ubicacion-usuario" placeholder="Ubicación (C.P.)">
            

            <div class="btn-reg">
            <button class="sub-btn-reg">REGISTRARTE</button>
            </div>
        </form>
    </div>
</div>

</body>
</html>