<?php
    include 'includes/functions/sesiones.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/png" href="img/title.png">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Lato:wght@300;400;700;900&display=swap">
    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="css/styles.css">
    <title>ROSALIMON | Inicio</title>
</head>

<body>
    <div class="loading">
        <p>R<span>L</span></p>
        <p>Tu tienda favorita esta cargando...</p>
    </div>

    <div class="page">
        <header class="site-header header-inicio">
                <div class="barra">

                        <div class="menu-movil">
                            <img src="img/open-menu.svg" alt="">
                        </div>

                        <div class="logotipo centrar">
                            <a href="index.php">
                                <img src="img/png.png" alt="logotipo">
                            </a>
                        </div>

                </div>
                        <nav class="navegacion grid">
                            <a href="productos.php">Productos</a>
                            <a href="carrito.php" class="botonCarrito">Carrito<img src="img/carrito.png"alt=""></a>
                        </nav>
            <div class="contenido-header">

                        <h1>Que darte amor siempre sea una prioridad</h1>
            </div>

        </header>

        <section class="seccion nosotros-inicio">
            <h2 class="contenedor">Compra a <span>tu manera</span></h2>

            <div class="contenido-nosotros">
                <div class="iconos-nosotros contenedor">
                    <div class="icono">
                        <h3>Envio</h3>
                        <img src="img/shipping.svg" alt="Confianza">
                        <p>A partir de 60$ el envío te sale gratis</p>
                    </div>

                    <div class="icono">
                        <h3>Compra</h3>
                        <img src="img/online-shopping.svg" alt="skincare">
                        <p>Puedes comprar on-line y retirar cuando gustes sin costo adicional</p>
                    </div>

                    <div class="icono">
                        <h3>Servicio</h3>
                        <img src="img/location.svg" alt="Seguridad">
                        <p>
                            Para mayor comodidad disponemos de servicio delivery
                        </p>
                    </div>
                </div>
            </div>
        </section>

        <!-- <main>
           
        </main>  -->

        <section class="contacto-inicio seccion">
            <h2 class="contenedor"><span>Encuentra</span> el producto mas adecuado para ti</h2>
            <div class="contenido-contacto">
                <div class="contenedor">
                    <p>Puedes llenar el formulario y nos pondremos en contacto
                        contigo a la brevedad.
                    </p>
                     <a href="contacto.php" class="boton botonPrimario">Contactar</a>
                </div>
               
            </div>
        </section>

        <div class="seccion-inferior contenedor">

            <section class="testimoniales">
                <h3>Testimoniales</h3>
                <div class="testimonial">
                    <p>Siguenos en <a href="https://www.instagram.com/rosalimon.ve/">Instagram</a> y dejanos tu opinión!</p>
                    <blockquote>
                        <img src="img/testimoniales/testimonial1.jpg" alt="">
                        <img src="img/testimoniales/testimonial2.jpg" alt="">
                        <img src="img/testimoniales/testimonial3.jpg" alt="">
                        <img src="img/testimoniales/testimonial4.jpg" alt="">
                        <img src="img/testimoniales/testimonial5.jpg" alt="">
                    </blockquote>
                </div>
            </section>

            <!-- Se elimino marcas de productos -->
        </div>

<?php include_once 'includes/templates/footer.php'; ?>