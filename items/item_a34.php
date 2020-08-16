<?php include_once '../includes/templates/header.php' ?>
    <main class="descripcion-producto">
        <div class="contenedor">
            <h1 class="titulo-producto">Spascriptions Kit Gel Face Mask</h1>

            <div class="contenido-descripcion">
                <div class="fotos">
                    <div class="imagen-descripcion">
                        <img src="../media/A34/A34.1.jpg" alt="">
                    </div>


                    <div class="galeria">
                        <p>Mas imagenes</p>
                        <a href="../media/A34/A34.2.jpg" data-lightbox="galeria">
                            <img class="miniaturas" src="../media/A34/A34.2.jpg" alt="">
                        </a>
                        <a href="../media/A34/A34.3.jpg" data-lightbox="galeria">
                            <img class="miniaturas" src="../media/A34/A34.3.jpg" alt="">
                        </a>
                        <a href="../media/A34/A34.4.jpg" data-lightbox="galeria">
                            <img class="miniaturas" src="../media/A34/A34.4.jpg" alt="">
                        </a>
                        <a href="../media/A34/A34.5.jpg" data-lightbox="galeria">
                            <img class="miniaturas" src="../media/A34/A34.5.jpg" alt="">
                        </a>
                    </div>
                </div>

                <div class="texto-descripcion">
                    <p>Kit de mascarillas para disminuir las lineas de expresion, desinflama, hidrata y disminuye las ojeras. Inclueye aplicador</p>
                    <p class="precio"><span>Precio por unidad: </span>$ 16.00</p>
                    <form class="formulario-pedido" action="">
                        <fieldset>
                            <legend>Ordenar</legend>
                            <label for="cantidad">Cantidad: </label>
                            <select name="" id="cantidad" required class="d-block">
                                <option value="" disabled selected>--Seleccione--</option>
                                <option value="1" >1</option>
                                <option value="2" >2</option>
                            </select>

                            <input type="submit" value="Agregar Al Carrito" class="d-block agregarCarrito">
                        </fieldset>
                    </form>
                </div>
            </div>

        </div>

    </main>
    <?php include_once '../includes/templates/footer.php'; ?>