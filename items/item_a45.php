<?php include_once '../includes/templates/header.php' ?>
    <main class="descripcion-producto">
        <div class="contenedor">
            <h1 class="titulo-producto">Splash Victoria Secret's Grande</h1>

            <div class="contenido-descripcion">
                <div class="fotos">
                    <div class="imagen-descripcion">
                        <img src="../media/A45/A45.1.webp" alt="">
                    </div>


                    <div class="galeria">
                        <p>Mas imagenes</p>
                        <a href="../media/A45/A45.2.webp" data-lightbox="galeria">
                            <img class="miniaturas" src="../media/A45/A45.2.webp" alt="">
                        </a>
                        <a href="../media/A45/A45.3.webp" data-lightbox="galeria">
                            <img class="miniaturas" src="../media/A45/A45.3.webp" alt="">
                        </a>
                    </div>
                </div>

                <div class="texto-descripcion">
                    <p>Conoce y explora las nuevas fragancias de la coleccion Victoria Secret's. (consultar aroma disponible)</p>
                    <p class="precio"><span>Precio por unidad: </span>$ 15.00</p>
                    <form class="formulario-pedido" action="">
                        <fieldset>
                            <legend>Ordenar</legend>
                            <label for="cantidad">Cantidad: </label>
                            <select name="" id="cantidad" required class="d-block">
                                <option value="" disabled selected>En camino</option>
                            </select>

                            <input type="submit" value="Agregar Al Carrito" class="d-block agregarCarrito">
                        </fieldset>
                    </form>
                </div>
            </div>

        </div>

    </main>
    <?php include_once '../includes/templates/footer.php'; ?>