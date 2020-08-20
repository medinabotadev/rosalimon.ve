<?php include_once '../includes/templates/header.php' ?>
    <main class="descripcion-producto">
        <div class="contenedor">
            <h1 class="titulo-producto">Fragance Mist PINK 250ml.</h1>

            <div class="contenido-descripcion">
                <div class="fotos">
                    <div class="imagen-descripcion">
                        <img src="../media/A2/A2.1.jpg" alt="">
                    </div>


                    <div class="galeria">
                        <p>Mas imagenes</p>
                        <a href="../media/A2/A2.2.jpg"" data-lightbox="galeria">
                            <img class="miniaturas" src="../media/A2/A2.2.jpg" alt="">
                        </a>
                        <a href="../media/A2/A2.3.jpg" data-lightbox="galeria">
                            <img class="miniaturas" src="../media/A2/A2.3.jpg" alt="">
                        </a>
                    </div>
                </div>

                <div class="texto-descripcion">
                    <p>Conoce y explora las nuevas fragancias de la coleccion Pink. (consultar aroma disponible)</p>
                    <p class="precio"><span>Precio por unidad: </span>$ 12.00</p>
                    <form class="formulario-pedido" action="">
                        <fieldset>
                            <legend>Ordenar</legend>
                            <label for="cantidad">Cantidad: </label>
                            <select name="" id="cantidad" required class="d-block">
                                <script>
                                    var disponibles;
                                    for(var i = 1; i <= 15; i++ ){
                                    var cantidad;
                                    cantidad += '"<option value=' + '"' + i + '"' + '>' + i + '</option>"'
                                    }
                                    disponibles = document.getElementById("cantidad").innerHTML = '"<option value="" disabled selected>--Seleccione--</option>"' + cantidad
                                </script>
                            </select>

                            <input type="submit" value="Agregar Al Carrito" class="d-block agregarCarrito">
                        </fieldset>
                    </form>
                </div>
            </div>

        </div>

    </main>
    <?php include_once '../includes/templates/footer.php'; ?>