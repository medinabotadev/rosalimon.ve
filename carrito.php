<?php
include 'includes/functions/sesiones.php'; 
$idUsuario = $_SESSION['id'];
include_once 'includes/templates/header.php'
// SELECT * FROM carrito INNER JOIN productos ON carrito.id_producto_carrito = productos.id_producto INNER JOIN usuarios ON carrito.id_usuario_carrito = usuarios.id_usuario WHERE id_usuario = 
?>

    <main class="carritohtml">
        <h1 class="titulo-producto">Tu carrito de compras</h1>
        <div class="recordatorio seccion">
            <p><img src="img/bell.svg" alt=""> Te recordamos que por compras mayores a 60$ tu envio sale totalmente gratis <img src="img/bell.svg" alt=""></p>
        </div>
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
                <span>(3 productos)</span>
                <span class="precio">35.99$</span>

                <input type="submit" value="Procesar pago" class="d-block boton botonPrimario">
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
                    <div class="botonesCarrito">
                        <a class="boton botonPrimario" href="item.php?producto=<?php echo $producto['codigo_producto'] ?>">Ver producto</a>
                        <button class="eliminarProducto">Eliminar del carrito</button>
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
        <?php include_once 'includes/templates/footer.php'; ?>