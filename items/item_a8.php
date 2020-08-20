<?php include_once '../includes/templates/header.php' ?>
    <main class="descripcion-producto">
        <div class="contenedor">
            <h1 class="titulo-producto">Clean & Clear Morning Burst Hydrating Gel Face Moisturizer, 3 oz</h1>

            <div class="contenido-descripcion">
                <div class="fotos">
                    <div class="imagen-descripcion">
                        <img src="../media/A8/A8.1.jpg" alt="">
                    </div>


                    <div class="galeria">
                        <p>Mas imagenes</p>
                        <a href="../media/A8/A8.2.jpg" data-lightbox="galeria">
                            <img class="miniaturas" src="../media/A8/A8.2.jpg" alt="">
                        </a>
                        <a href="../media/A8/A8.3.jpg" data-lightbox="galeria">
                            <img class="miniaturas" src="../media/A8/A8.3.jpg" alt="">
                        </a>
                    </div>
                </div>

                <div class="texto-descripcion">
                    <p>Gel Hidratante de dia para todo tipo de piel con extracto de pepino, refresca e hidrata dejando tu piel hidratada pero no brillante.</p>
                    <p class="precio"><span>Precio por unidad: </span>$ 10.00</p>
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