<?php include_once '../includes/templates/header.php' ?>
    <main class="descripcion-producto">
        <div class="contenedor">
            <h1 class="titulo-producto">Bandanas para el cabello</h1>

            <div class="contenido-descripcion">
                <div class="fotos">
                    <div class="imagen-descripcion">
                        <img src="../media/A33/A33.1.jpg" alt="">
                    </div>


                    <div class="galeria">
                        <p>Mas imagenes</p>
                        <a href="../media/A33/A33.2.jpg" data-lightbox="galeria">
                            <img class="miniaturas" src="../media/A33/A33.2.jpg" alt="">
                        </a>
                        <a href="../media/A33/A33.3.jpg" data-lightbox="galeria">
                            <img class="miniaturas" src="../media/A33/A33.3.jpg" alt="">
                        </a>
                        <a href="../media/A33/A33.4.jpg" data-lightbox="galeria">
                            <img class="miniaturas" src="../media/A33/A33.4.jpg" alt="">
                        </a>
                        <a href="../media/A33/A33.5.jpg" data-lightbox="galeria">
                            <img class="miniaturas" src="../media/A33/A33.5.jpg" alt="">
                        </a>
                        <a href="../media/A33/A33.6.jpg" data-lightbox="galeria">
                            <img class="miniaturas" src="../media/A33/A33.6.jpg" alt="">
                        </a>
                    </div>
                </div>

                <div class="texto-descripcion">
                    <p>Permite realizar tu rutina de skincare y maquillaje sujetando tu cabello.</p>
                    <p class="precio"><span>Precio por unidad: </span>$ 6.00</p>
                    <form class="formulario-pedido" action="">
                        <fieldset>
                            <legend>Ordenar</legend>
                            <label for="cantidad">Cantidad: </label>
                            <select name="" id="cantidad" required class="d-block">                             
                                <option value="" disabled selected>--Seleccione--</option>
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="5">5</option>
                                <option value="6">6</option>
                                <option value="7">7</option>
                                <option value="8">8</option>
                            </select>

                            <input type="submit" value="Agregar Al Carrito" class="d-block agregarCarrito">
                        </fieldset>
                    </form>
                </div>
            </div>

        </div>

    </main>
    <?php include_once '../includes/templates/footer.php'; ?>