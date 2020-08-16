<?php include_once '../includes/templates/header.php' ?>
    <main class="descripcion-producto">
        <div class="contenedor">
            <h1 class="titulo-producto">Clean & Clear Daily Acne Skincare Set</h1>

            <div class="contenido-descripcion">
                <div class="fotos">
                    <div class="imagen-descripcion">
                        <img src="../media/A12/A12.1.jpg" alt="">
                    </div>


                    <div class="galeria">
                        <p>Mas imagenes</p>
                        <a href="../media/A12/A12.2.jpg" data-lightbox="galeria">
                            <img class="miniaturas" src="../media/A12/A12.2.jpg" alt="">
                        </a>
                        <a href="../media/A12/A12.3.jpg" data-lightbox="galeria">
                            <img class="miniaturas" src="../media/A12/A12.3.jpg" alt="">
                        </a>
                    </div>
                </div>

                <div class="texto-descripcion">
                    <p>Set de rutina facial para piel con acne o grasa.  Paso 1: Jabon para limpieza. Paso 2: Tonico Astringente. Paso3: Hidratante.</p>
                    <p class="precio"><span>Precio por unidad: </span>$ 22.00</p>
                    <form class="formulario-pedido" action="">
                        <fieldset>
                            <legend>Ordenar</legend>
                            <label for="cantidad">Cantidad: </label>
                            <select name="" id="cantidad" required class="d-block">
                                <option value="" disabled selected>No disponible</option>
                            </select>

                            <input type="submit" value="Agregar Al Carrito" class="d-block agregarCarrito">
                        </fieldset>
                    </form>
                </div>
            </div>

        </div>

    </main>
    <?php include_once '../includes/templates/footer.php'; ?>