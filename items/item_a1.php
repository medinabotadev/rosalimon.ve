<?php include_once '../includes/templates/header.php' ?>
    <main class="descripcion-producto">
        <div class="contenedor">
            <h1 class="titulo-producto">Fragance Mist PINK 75ml.</h1>

            <div class="contenido-descripcion">
                <div class="fotos">
                    <div class="imagen-descripcion">
                        <img src="../img/unnamed.jpg" alt="">
                    </div>


                    <div class="galeria">
                        <p>Mas imagenes</p>
                        <a href="../img/unnamed.jpg"" data-lightbox="galeria">
                            <img class="miniaturas" src="../img/unnamed.jpg" alt="">
                        </a>
                        <a href="../img/unnamed.jpg" data-lightbox="galeria">
                            <img class="miniaturas" src="../img/unnamed.jpg" alt="">
                        </a>
                    </div>
                </div>

                <div class="texto-descripcion">
                    <p>Conoce y explora las nuevas fragancias de la coleccion Pink. (consultar aroma disponible)</p>
                    <p class="precio"><span>Precio por unidad: </span>$ 6.00</p>
                    <form class="formulario-pedido" action="">
                        <fieldset>
                            <legend>Ordenar</legend>
                            <label for="cantidad">Cantidad: </label>
                            <select name="" id="cantidad" required class="d-block">
                                <option value="" disabled selected>--Seleccione--</option>
                                <option value="1" disabled>1</option>
                            </select>

                            <input type="submit" value="Agregar Al Carrito" class="d-block agregarCarrito">
                        </fieldset>
                    </form>
                </div>
            </div>

        </div>

    </main>
    <?php include_once '../includes/templates/footer.php'; ?>