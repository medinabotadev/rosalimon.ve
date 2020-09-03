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
            <div class="contenido-header">
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
                            <a href="productos.php">Productos</a>
                            <a href="carrito.php" class="botonCarrito">Carrito<img src="img/carrito.png" alt=""></a>
                        </nav>
                    </div>
                </div>

                <h1>Que darte amor siempre sea una prioridad</h1>
            </div>
        </header>

        <section class="seccion nosotros-inicio">
            <h2 class="contenedor">Compra a <span>tu manera</span></h2>

            <div class="contenido-nosotros">
                <div class="iconos-nosotros contenedor">
                    <div class="icono">
                        <h3>Envio Gratis</h3>
                        <img src="img/shipping.svg" alt="Confianza">
                        <p>A partir de 60$ el envío te sale gratis</p>
                    </div>

                    <div class="icono">
                        <h3>Compra on-line</h3>
                        <img src="img/online-shopping.svg" alt="skincare">
                        <p>Puedes comprar on-line y retirar cuando gustes sin costo adicional</p>
                    </div>

                    <div class="icono">
                        <h3>Delivery</h3>
                        <img src="img/location.svg" alt="Seguridad">
                        <p>
                            Para mayor comodidad disponemos de servicio delivery
                        </p>
                    </div>
                </div>
            </div>
        </section>

        <main class="seccion productos-inicio">
            <h2 class="contenedor">Nuestros <span>productos</span> mas destacados </h2>

            <div class="contenido-productos">
                <div class="iconos-productos contenedor">
                    <div class="producto">
                        <img src="media/A33/A33.1.jpg" alt="Imagen">

                        <h3>Bandanas para el cabello</h3>
                        <p>Permite realizar tu rutina de skincare y maquillaje sujetando tu cabello.</p>
                        <a href="item.php?producto=A33" class="boton botonPrimario">Ver Producto Ahora</a>
                    </div>

                    <div class="producto">
                        <img src="media/A19/A19.1.jpeg" alt="imagen">

                        <h3>Freeman Feeling Beautiful Facial Clay Mask Avocado & Oatmeal 6 oz</h3>
                        <p>Mascarilla purificante a base de aguacate y avena con vitamina E, limpia e hidrata
                            profundamente. Para todo tipo de piel.</p>
                        <a href="item.php?producto=A19" class="boton botonPrimario">Ver Producto Ahora</a>

                    </div>

                    <div class="producto">
                        <img src="media/A31/A31.1.jpg" alt="Imagen de Splash y Mascarilla">

                        <h3>Palmer's Skin Success Anti-Dark Spot Fade Cream, 2.7 oz.</h3>
                        <p>Crema desmanchadora a base de retinol, vitamina C y vitamina E. devuelve la uniformidad al
                            tono de tu piel
                            Para todo tipo de piel</p>
                        <a href="item.php?producto=A31" class="boton botonPrimario">Ver Producto Ahora</a>

                    </div>

                    <div class="producto">
                        <img src="media/A39/A39.1.jpg" alt="Imagen de Exfoliante">

                        <h3>Balsamo labial M&M</h3>
                        <p>Hidratante de labios. Se vende individual.</p>
                        <a href="item.php?producto=A39" class="boton botonPrimario">Ver Producto Ahora</a>
                    </div>
                </div>

                <div class="ver-todas contenedor">
                    <a href="productos.php" class="boton botonPrimario">Ver Nuestro Catalogo Completo</a>
                </div>
            </div>
        </main>

        <section class="contacto-inicio seccion">
            <h2 class="contenedor"><span>Encuentra</span> el producto mas adecuado para ti</h2>
            <div class="contenido-contacto">
                <div class="contenedor">
                    <p>Si no encuentras tu producto ideal, puedes llenar el formulario y nos pondremos en contacto
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

            <section class="marcas">
                <h3>Algunas de nuestras marcas</h3>
                <div class="imagenes-marca">
                    <img src="img/freeman.svg" alt="">
                    <img src="img/victoria-secret.svg" alt="">
                    <img src="img/neutrogena.svg" alt="">
                    <img src="img/cleannclear.svg" alt="">
                </div>
            </section>

        </div>

<?php include_once 'includes/templates/footer.php'; ?>