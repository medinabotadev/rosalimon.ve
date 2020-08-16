<?php include_once '../includes/templates/header.php' ?>
    <main class="descripcion-producto">
        <div class="contenedor">
            <h1 class="titulo-producto">Copas mentruales</h1>

            <div class="contenido-descripcion">
                <div class="fotos">
                    <div class="imagen-descripcion">
                        <img src="../media/A43/A43.1.jpg" alt="">
                    </div>


                    <div class="galeria">
                        <p>Mas imagenes</p>
                        <a href="../media/A43/A43.2.jpg" data-lightbox="galeria">
                            <img class="miniaturas" src="../media/A43/A43.2.jpg" alt="">
                        </a>
                        <a href="../media/A43/A43.3.jpg" data-lightbox="galeria">
                            <img class="miniaturas" src="../media/A43/A43.3.jpg" alt="">
                        </a>
                        <a href="../media/A43/A43.4.jpg" data-lightbox="galeria">
                            <img class="miniaturas" src="../media/A43/A43.4.jpg" alt="">
                        </a>
                        <a href="../media/A43/A43.22.jpg" data-lightbox="galeria">
                            <img class="miniaturas" src="../media/A43/A43.22.jpg" alt="">
                        </a>
                    </div>
                </div>

                <div class="texto-descripcion">
                    <p>Talla S y L</p>
                    <p class="precio"><span>Precio por unidad: </span>$ 10.00</p>
                    <form class="formulario-pedido" action="">
                        <fieldset>
                            <legend>Ordenar</legend>
                            <label for="cantidad">Cantidad: </label>
                            <select name="" id="cantidad" required class="d-block">
                                <option value="" disabled selected>--Seleccione--</option>
                                <option value="1">1</option>
                                <option value="2">2</option>
                            </select>

                            <input type="submit" value="Agregar Al Carrito" class="d-block agregarCarrito">
                        </fieldset>
                    </form>
                </div>
            </div>

        </div>

    </main>
    <?php include_once '../includes/templates/footer.php'; ?>