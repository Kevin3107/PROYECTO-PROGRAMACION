<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Imagen de Fondo</title>
<style>
  body {
    background-image: url("img/fondodepantalla.png"); /* Reemplaza 'ruta/de/tu/imagen.jpg' con la ubicación de tu imagen */
    background-size: cover; /* La imagen de fondo cubrirá todo el contenedor */
    background-position: center; /* La imagen de fondo se posicionará en el centro */
    background-repeat: no-repeat; /* La imagen de fondo no se repetirá */
  }
</style>
</head>
<body>


<?php include("templates/header.php"); ?>
<!-- Descripcion de la Veterinaria -->
        <br/>
    <div class="container-fluid py-5">
        <h1 class="display-5 fw-bold">Veterinaria</h1>
        <p class="col-md-8 fs-4">
            Este es un programa de una veterinaria 
            <br/>
            Proyecto de Programacion 1 
            <br/>
            Inicio de Programacion el 20 / 02 /24
        </p>
       <!-- <button class="btn btn-primary btn-lg" type="button">
            Boton de Inicio
        </button> -->
    </div>
</div>
<?php include("templates/footer.php"); ?>
  
<!-- Parte de Abajo (Footer) -->

</body>
</html>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Redes Sociales</title>
<style>
    .alinear-abajo {
        position: relative;
        width: 300px;
        height: 180px;
    }
    .alinear-izquierda{
        position: absolute;
        bottom: 0;
        left: 20px;
    }
    .social-icons {
        list-style: none;
        padding: 0;
        display: flex;
    }
    .social-icons li {
        margin-right: 10px;
    }
    .social-icons li img {
        width: 30px; /* Tamaño de Los iconos*/
        height: auto;
        cursor: pointer;
        transition: transform 0.3s ease-in-out;
    }
    .social-icons li img:hover {
        transform: scale(1.5); /* efecto de escala al pasar el mouse */
    }
</style>
</head>
<body>
    <div class="alinear-abajo">
        <div class="alinear-izquierda">
            <ul class="social-icons">
                <li><a href="https://www.facebook.com" target="_blank"><img src="img/facebook-logo.png" alt="Facebook"></a></li>
                <li><a href="https://twitter.com" target="_blank"><img src="img/twitter-logo.png" alt="Twitter"></a></li>
                <li><a href="https://www.instagram.com" target="_blank"><img src="img/instagram-logo.png" alt="Instagram"></a></li>
                <li><a href="https://web.whatsapp.com" target="_blank"><img src="img/whatsapp_logo.png" alt="WhatsApp"></a></li>
                <li><a href="https://www.tiktok.com" target="_blank"><img src="img/tiktok-logo.png" alt="tiktok"></a></li>
                <li><a href="https://www.snapchat.com" target="_blank"><img src="img/snapchat-logo.png" alt="snapchat"></a></li>
                <li><a href="https://web.telegram.org" target="_blank"><img src="img/telegram-logo.png" alt="telegram"></a></li>
            </ul>
        </div>
    </div>
</body>
</html>
