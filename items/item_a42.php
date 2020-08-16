<?php include_once '../includes/templates/header.php' ?>
    <main class="descripcion-producto">
        <div class="contenedor">
            <h1 class="titulo-producto">Labiales Matte</h1>

            <div class="contenido-descripcion">
                <div class="fotos">
                    <div class="imagen-descripcion">
                        <img src="../media/A42/A42.1.jpg" alt="">
                    </div>


                    <div class="galeria">
                    </div>
                </div>

                <div class="texto-descripcion">
                    <p>Labiales de alta duracion totalmente mattes y cremosos</p>
                    <p class="precio"><span>Precio por unidad: </span>$ 3.00</p>
                    <form class="formulario-pedido" action="">
                        <fieldset>
                            <legend>Ordenar</legend>
                            <label for="cantidad">Cantidad: </label>
                            <select name="" id="cantidad" required class="d-block">                             
                                <script>
                                var disponibles;
                                for(var i = 1; i <= 41; i++ ){
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