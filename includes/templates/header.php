<?php
$archivo = basename($_SERVER['PHP_SELF']);
$nombre_archivo = strstr($archivo, '.php', true);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/png" href="img/title.png">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>ROSALIMON | <?php echo ucfirst($nombre_archivo) ?></title>
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.6.0/dist/leaflet.css" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Lato:wght@300;400;700;900&display=swap">
    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="css/lightbox.css">
    <link rel="stylesheet" href="css/styles.css">
    <?php
    if ($nombre_archivo == 'contacto' || $nombre_archivo == 'formulario-compra') { ?>
        <script src='https://www.google.com/recaptcha/api.js?render=6LeJ1tcZAAAAAOcETA0K0MP0Vybid1UnxFdrzO8D'></script>
        <script>
            grecaptcha.ready(function() {
                grecaptcha.execute('6LeJ1tcZAAAAAOcETA0K0MP0Vybid1UnxFdrzO8D', {
                        action: 'formulario'
                    })
                    .then(function(token) {
                        var recaptchaResponse = document.getElementById('recaptchaResponse');
                        recaptchaResponse.value = token;
                    });
            });
        </script>
    <?php   } ?>
</head>

<body>
    <header class="site-header">
        <?php if ($nombre_archivo == 'index') { ?>
            <?php echo '<div class="contenido-header">'; ?>
        <?php } ?>
        <div class="barra">
            <div class="logotipo">
                <a href="index.php">
                    <img src="img/png.png" alt="logotipo">
                </a>
            </div>

            <div class="barra-fija">
                <div class="menu-movil">
                    <p>Menu</p>
                    <img src="img/open-menu.svg" alt="">
                </div>

                <nav class="navegacion">
                    <a href="index.php">Inicio<img src="img/home.png" alt="home"></a>
                    <a href="productos.php">Productos</a>
                    <a href="carrito.php" class="botonCarrito">Carrito<img src="img/carrito.png" alt=""></a>
                </nav>
            </div>
        </div>
    </header>