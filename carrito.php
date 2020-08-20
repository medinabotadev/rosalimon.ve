<?php include_once 'includes/templates/header.php' ?>

    <main class="carritohtml">
        <h1 class="titulo-producto">Tu carrito de compras</h1>
        <div class="recordatorio seccion">
            <p><img src="img/bell.svg" alt=""> Te recordamos que por compras mayores a 60$ tu envio sale totalmente gratis <img src="img/bell.svg" alt=""></p>
        </div>

        <div class="contenido-carrito contenedor">
            <aside class="total">
                <span class="d-block">Total:</span>
                <span>(3 productos)</span>
                <span class="precio">35.99$</span>

                <input type="submit" value="Procesar pago" class="d-block boton botonPrimario">
            </aside>

            <h2 class="headeres">Productos en carrito</h2>

            <div class="productosCarrito">

                <div class="itemCarrito">
                    <div class="item item-carrito">
                        <div class="imagen-carrito">
                            <img src="img/producto1.jpg" alt="Imagen de Mascarillas">
                        </div>
                        <h3>Mascarillas Freeman</h3>
                        <p class="precio">$ 10.00</p>
                        <div class="botones-carrito">
                            <a href="item.html" class="boton botonPrimario">Ver Producto</a>
                            <a href="item.html" class="boton botonPrimario">Eliminar del carrito</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>

    <?php include_once 'includes/templates/footer.php'; ?>