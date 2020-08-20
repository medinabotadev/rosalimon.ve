<?php include_once '../includes/templates/header.php' ?>
    <main class="descripcion-producto">
        <div class="contenedor">
            <h1 class="titulo-producto">OGX Smoothing + Liquid Pearl Luminescent Serum, 3.8 oz</h1>

            <div class="contenido-descripcion">
                <div class="fotos">
                    <div class="imagen-descripcion">
                        <img src="../media/A37/A37.1.jpg" alt="">
                    </div>


                    <div class="galeria">
                        <p>Mas imagenes</p>
                        <a href="../media/A37/A37.2.jpg" data-lightbox="galeria">
                            <img class="miniaturas" src="../media/A37/A37.2.jpg" alt="">
                        </a>
                    </div>
                </div>

                <div class="texto-descripcion">
                    <p>Hidrata, minimiza el Frizz y regenera el cabello haciendolo lucir brillante naturalmente a base de aceite de ricino. No lo deja graso, se disuelve en el cabello mojado.</p>
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