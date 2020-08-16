<?php include_once '../includes/templates/header.php' ?>
    <main class="descripcion-producto">
        <div class="contenedor">
            <h1 class="titulo-producto">Freeman Feeling Beautiful Polishing Mask, Charcoal & Black Sugar, 6 Fl Oz</h1>

            <div class="contenido-descripcion">
                <div class="fotos">
                    <div class="imagen-descripcion">
                        <img src="../media/A18/A18.1.jpeg" alt="">
                    </div>


                    <div class="galeria">
                        <p>Mas imagenes</p>
                        <a href="../media/A18/A18.2.jpeg" data-lightbox="galeria">
                            <img class="miniaturas" src="../media/A18/A18.2.jpeg" alt="">
                        </a>
                        <a href="../media/A18/A18.3.jpg" data-lightbox="galeria">
                            <img class="miniaturas" src="../media/A18/A18.3.jpg" alt="">
                        </a>
                    </div>
                </div>

                <div class="texto-descripcion">
                    <p>Mascarilla doble funcion, aclarante y exfoliante. Purifica y limpia profundamente dejando tu piel radiante. 
                        Para todo tipo de piel</p>
                    <p class="precio"><span>Precio por unidad: </span>$ 8.00</p>
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
                            </select>

                            <input type="submit" value="Agregar Al Carrito" class="d-block agregarCarrito">
                        </fieldset>
                    </form>
                </div>
            </div>

        </div>

    </main>
    <?php include_once '../includes/templates/footer.php'; ?>