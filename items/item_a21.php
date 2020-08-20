<?php include_once '../includes/templates/header.php' ?>
    <main class="descripcion-producto">
        <div class="contenedor">
            <h1 class="titulo-producto">Equate Beauty Deep Cleaning Astringent, 10 fl oz</h1>

            <div class="contenido-descripcion">
                <div class="fotos">
                    <div class="imagen-descripcion">
                        <img src="../media/A21/A21.1.jpg" alt="">
                    </div>


                    <div class="galeria">
                        <p>Mas imagenes</p>
                        <a href="../media/A21/A21.2.jpg" data-lightbox="galeria">
                            <img class="miniaturas" src="../media/A21/A21.2.jpg" alt="">
                        </a>
                        <a href="../media/A21/A21.3.jpg" data-lightbox="galeria">
                            <img class="miniaturas" src="../media/A21/A21.3.jpg" alt="">
                        </a>
                    </div>
                </div>

                <div class="texto-descripcion">
                    <p>Tonico Astringente Limpiador profundo de poros. Comparado con Sea Breeze. Para piel sensible.</p>
                    <p class="precio"><span>Precio por unidad: </span>$ 7.00</p>
                    <form class="formulario-pedido" action="">
                        <fieldset>
                            <legend>Ordenar</legend>
                            <label for="cantidad">Cantidad: </label>
                            <select name="" id="cantidad" required class="d-block">
                                <option value="" disabled selected>--Seleccione--</option>
                                <option value="1">1</option>
                            </select>

                            <input type="submit" value="Agregar Al Carrito" class="d-block agregarCarrito">
                        </fieldset>
                    </form>
                </div>
            </div>

        </div>

    </main>
    <?php include_once '../includes/templates/footer.php'; ?>