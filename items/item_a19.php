<?php include_once '../includes/templates/header.php' ?>
    <main class="descripcion-producto">
        <div class="contenedor">
            <h1 class="titulo-producto">Freeman Feeling Beautiful Facial Clay Mask Avocado & Oatmeal 6 oz</h1>

            <div class="contenido-descripcion">
                <div class="fotos">
                    <div class="imagen-descripcion">
                        <img src="../media/A19/A19.1.jpeg" alt="">
                    </div>


                    <div class="galeria">
                        <p>Mas imagenes</p>
                        <a href="../media/A19/A19.2.webp" data-lightbox="galeria">
                            <img class="miniaturas" src="../media/A19/A19.2.webp" alt="">
                        </a>
                        <a href="../media/A19/A19.3.webp" data-lightbox="galeria">
                            <img class="miniaturas" src="../media/A19/A19.3.webp" alt="">
                        </a>
                    </div>
                </div>

                <div class="texto-descripcion">
                    <p>Mascarilla purificante a base de aguacate y avena con vitamina E  limpia e hidrata profundamente. Para todo tipo de piel.</p>
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