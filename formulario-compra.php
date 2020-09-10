<?php
include 'includes/functions/sesiones.php'; 
$idUsuario = $_SESSION['id'];
include_once 'includes/templates/header.php';
?>
        <main>
        <div class="texto-contacto">
            <h1 class="headeres">Formulario de orden de compra</h1>
            <p>*Por tu seguridad y la nuestra todos los campos son obligatorios</p>
        </div>

            <form action="validacion_compra.php" method="POST" class="contenedor">
                <fieldset>
                    <legend>Informacion personal</legend>

                    <label for="nombre">Nombre:</label>
                    <input type="text" id="nombre" name="nombre" placeholder="Tu nombre" required>

                    <label for="nombre">Apellido:</label>
                    <input type="text" id="apellido" name="apellido" placeholder="Tu nombre" required>

                    <label for="email">E-mail:</label>
                    <input type="email" id="email" name="email" placeholder="Tu correo electronico" required>

                    <label for="telefono">Telefono:</label>
                    <input type="tel" id="telefono" name="telefono" placeholder="Tu numero de telefono" required>
                </fieldset>

                <fieldset>
                    <legend>Direccion y metodo de entrega</legend>

                    <label for="pais">Pais:</label>
                    <input type="text" id="pais" name="pais" placeholder="Venezuela" value="Venezuela" disabled>

                    <label for="estado">Estado:</label>
                    <input type="text" id="estado" name="estado" placeholder="Estado" required>

                    <label for="ciudad">Ciudad:</label>
                    <input type="text" id="ciudad" name="ciudad" placeholder="Ciudad" required>

                    <label for="direccion1">Direccion 1:</label>
                    <input type="text" id="direccion1" name="direccion1" placeholder="Direccion 1" required>

                    <label for="direccion2">Direccion 2:</label>
                    <input type="text" id="direccion2" name="direccion2" placeholder="Direccion 2">

                    <label for="codigopostal">Codigo postal:</label>
                    <input type="num" id="codigopostal" name="codigopostal" placeholder="Codigo postal" required>

                    <!-- METODO DE ENVIO -->
                    <div class="metodo-envio">
                    <label for="delivery">(Solo en Anaco) Delivery:</label>
                    <input type="radio" name="metodo-envio" value="delivery" id="delivery" required>

                    <label for="envio">Envio nacional:</label>
                    <input type="radio" name="metodo-envio" value="envio" id="envio" required>

                    <label for="retiro">Retirar en nuestra ubicacion</label>
                    <input type="radio" name="metodo-envio" value="retiro" id="retiro" required>
                    </div>

                    <input type="submit" name="submit" value="Confirmar pedido" class="d-block boton botonPrimario">

                </fieldset>

            </form>

<?php
            include 'includes/functions/db_connection.php';
            try {
                $productos = $connection->query(" SELECT * FROM carrito INNER JOIN productos ON carrito.id_producto_carrito = productos.id_producto INNER JOIN usuarios ON carrito.id_usuario_carrito = usuarios.id_usuario WHERE id_usuario = $idUsuario ORDER BY id_carrito DESC ");
            } catch(Exception $e){
                echo $e->getMessage();
            }
            if($productos->num_rows > 0){ ?>
            <!-- POR AQUI LOS ELEMENTOS ARRIBA DEL ITEM -->
            <div class="contenido-carrito contenedor">
            <aside class="total">
                <span class="d-block">Total:</span>
                <span class="totalProductos"></span>
                <span class="precio totalCompra"></span>
                <p>Tienes preguntas sobre el proceso de compra? <a href="contacto.php">Contactanos</a> o mira los <a href="pasos-compra.php">pasos a seguir!</a></p>
            </aside>
            <div class="productosCarrito">
        <?php        foreach($productos as $producto){ ?>
                    <!-- AQUI SE REPETIRA EL ITEM -->
                    <?php
                    // VARIABLES (14)
                    // EN ESTE FORMATO
                    /* array(14) {
                        ["id_carrito"]=>
                        string(1) "7"
                        ["id_usuario_carrito"]=>
                        string(2) "49"
                        ["id_producto_carrito"]=>
                        string(1) "2"
                        ["id_producto"]=>
                        string(1) "2"
                        ["codigo_producto"]=>
                        string(2) "A2"
                        ["nombre_producto"]=>
                        string(25) "Fragance Mist PINK 250ml."
                        ["descripcion_producto"]=>
                        string(89) "Conoce y explora las nuevas fragancias de la coleccion Pink. (consultar aroma disponible)"
                        ["precio_producto"]=>
                        string(5) "12.00"
                        ["id_categoria_producto"]=>
                        string(1) "2"
                        ["img_1"]=>
                        string(8) "A2.1.jpg"
                        ["img_2"]=>
                        string(0) ""
                        ["img_3"]=>
                        string(0) ""
                        ["id_usuario"]=>
                        string(2) "49"
                        ["codigo_usuario"]=>
                        string(60) "$2y$12$rTRt/AfSxwwdww2a.fJCke/V0tV9vGrZgi3d986VfZ5.TGcmjlqBq"
                      } */

                    ?>
                <div class="item">
                    <div class="item-carrito">
                        <img src="media/<?php echo $producto['codigo_producto'] ?>/<?php echo $producto['img_1'] ?>" alt="">
                        <h3><?php echo $producto['nombre_producto'] ?></h3>
                        <p>Cantidad: 1</p>
                        <p class="precio"><?php echo "$" . $producto['precio_producto']; ?></p>
                    </div>
                </div>

        <?php        } ?>
            <!-- POR ACA LOS ELEMENTOS ABAJOS DEL ITEM -->
            </div>
        </div>
    </main>
        <?php    } else { ?>
                <div class="carrito-vacio">
                    <p>Aun no tienes productos en el carrito</p>
                    <p>Mira nuestro <a href="productos.php">catalogo</a> para agregar un producto</p>
                </div>
        <?php    } ?>

<?php
include_once 'includes/templates/footer.php';
?>