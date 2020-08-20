<?php include_once '../includes/templates/header.php' ?>
    <main class="descripcion-producto">
        <div class="contenedor">
            <h1 class="titulo-producto">Noxzema Clears and Prevents Acne Face Pads Anti-Blemish, 90 ct</h1>

            <div class="contenido-descripcion">
                <div class="fotos">
                    <div class="imagen-descripcion">
                        <img src="../media/A44/A44.1.jpg" alt="">
                    </div>


                    <div class="galeria">
                        <p>Mas imagenes</p>
                        <a href="../media/A44/A44.2.jpg" data-lightbox="galeria">
                            <img class="miniaturas" src="../media/A44/A44.2.jpg" alt="">
                        </a>
                        <a href="../media/A44/A44.3.jpg" data-lightbox="galeria">
                            <img class="miniaturas" src="../media/A44/A44.3.jpg" alt="">
                        </a>
                    </div>
                </div>

                <div class="texto-descripcion">
                    <p>Almoadillas limpiadoras faciales a base de eucalipto y acido salicilico, ayuda a prevenir la aparicion de acne limpiando profundamente</p>
                    <p class="precio"><span>Precio por unidad: </span>$ 8.00</p>
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