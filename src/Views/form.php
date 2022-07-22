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
    <link rel="stylesheet" href="../assets/css/style.css">    
    <link rel="stylesheet" href="../css/style.css">
    <title>Vender</title>
</head>
<body>

<?php include("./components/header.php"); ?>

    <div class="pag-venta">

        <h1 class="vent-titulo">SUBIR LIBRO</h1>

        <div class="formulario-venta">
                                <!--<a href="?action=create">
                                    <button type="button" class="btn btn-primary">crear cita</button>
                                </a>-->
                            
        
                <form action="create">
                    <label for="nom-libro"></label>
                    <input type="text" name="bookname" id="id" placeholder="Nombre del libro">

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
                </form>
        

            <div class="venta">

                
                <div class="grid-container">
                    <div class="grid-item">
                        <label class="input-lb" for="image-input">
                            <span class="plus">+</span>
                            <p>Agregar Portada</p>
                        <input class="cov-btn" type="file" id="image-input" accept="image/jpeg, image/png, image/jpg">
                        </label>
                    </div>
                </div>



                <div class="cover">
                    <div id="display-image"></div>
                </div>  
            </div>
        </div>

            <div class="primary-btn">
                <button class="sub-btn" type="submit">Subir</button>
            </div>
    </div>

    <script>

        const image_input = document.querySelector("#image-input");
        image_input.addEventListener("change", function() {
        const reader = new FileReader();
        reader.addEventListener("load", () => {
        const uploaded_image = reader.result;
        document.querySelector("#display-image").style.backgroundImage = `url(${uploaded_image})`;
        });
        reader.readAsDataURL(this.files[0]);
        });

    </script>

</body>
</html>