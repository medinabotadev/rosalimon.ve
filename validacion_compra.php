<?php
if ($_POST['action'] == 'process') {
    $recaptcha_url = 'https://www.google.com/recaptcha/api/siteverify';
    $recaptcha_secret = '6LeJ1tcZAAAAAElOMGjAfWHsEQGFjHxsZOizEWjK';
    $recaptcha_response = $_POST['recaptcha_response'];
    $recaptcha = file_get_contents($recaptcha_url . '?secret=' . $recaptcha_secret . '&response=' . $recaptcha_response);
    $recaptcha = json_decode($recaptcha);

    if ($recaptcha->score >= 0.7) { ?>
        <?php
        // OBTENEMOS EL ID USUARIO
        include 'includes/functions/sesiones.php';
        $idUsuario = $_SESSION['id'];
        ?>

        <?php if (isset($_POST['submit'])) {
            // OBTENEMOS EL TOTAL DE LA COMPRA
            try {
                include 'includes/functions/db_connection.php';
                $resultado = $connection->query(" SELECT SUM(precio_producto) AS total_orden FROM carrito INNER JOIN productos ON carrito.id_producto_carrito = productos.id_producto INNER JOIN usuarios ON carrito.id_usuario_carrito = usuarios.id_usuario WHERE id_usuario = $idUsuario ");
                $total = $resultado->fetch_assoc();
            } catch (Exception $e) {
                echo $e->getMessage();
            }

            // VARIABLES
            $idUsuario = $_SESSION['id'];
            $monto = (float) $total['total_orden'];
            $nombre = filter_var($_POST['nombre'], FILTER_SANITIZE_STRING);
            $apellido = filter_var($_POST['apellido'], FILTER_SANITIZE_STRING);
            $correo = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);
            $telefono = filter_var($_POST['telefono'], FILTER_SANITIZE_NUMBER_INT);
            $estado = filter_var($_POST['estado'], FILTER_SANITIZE_STRING);
            $ciudad = filter_var($_POST['ciudad'], FILTER_SANITIZE_STRING);
            $direccion1 = filter_var($_POST['direccion1'], FILTER_SANITIZE_STRING);
            $direccion2 = filter_var($_POST['direccion2'], FILTER_SANITIZE_STRING);
            if ($direccion2 === '') {
                $direccion2 = $direccion1;
            }
            $codigopostal = filter_var($_POST['codigopostal'], FILTER_SANITIZE_NUMBER_INT);
            $metodoEnvio = filter_var($_POST['metodo-envio'], FILTER_SANITIZE_STRING);
            date_default_timezone_set('America/Caracas');
            $fecha_orden = date('Y-m-d H:i:s');

            try {
                include 'includes/functions/db_connection.php';
                $stmt = $connection->prepare(" INSERT INTO ordenes (id_orden, id_usuario_orden, monto, nombre, apellido, correo, telefono, estado, ciudad, direccion_1, direccion_2, codigo_postal, metodo_envio, fecha_pedido) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?) ");
                $stmt->bind_param('iidssssssssiss', $idUsuario, $idUsuario, $monto, $nombre, $apellido, $correo, $telefono, $estado, $ciudad, $direccion1, $direccion2, $codigopostal, $metodoEnvio, $fecha_orden);
                $stmt->execute();
                if ($stmt->affected_rows == 1) {
                    $filasAfectadas = 1;
                }
                $stmt->close();
                $connection->close();
                // header('Location: validacion_compra.php?orden_exitosa=1&id_orden=' . $idUsuario);
            } catch (Exception $e) {
                echo $e->getMessage();
            }

            // $datosUsuario = array(
            //     'ID del Usuario' => $idUsuario,
            //     'Total a pagar del usuario' => $monto,
            //     'Nombre' => $nombre,
            //     'Apellido' => $apellido,
            //     'Correo' => $correo,
            //     'Telefono' => $telefono,
            //     'Estado' => $estado,
            //     'Ciudad' => $ciudad,
            //     'Direccion 1' => $direccion1,
            //     'Direccion 2' => $direccion2,
            //     'Codigo postal' => $codigopostal,
            //     'Metodo de envio' => $metodoEnvio,
            //     'Fecha de la orden' => $fecha_orden
            // );
        } ?>
        <?php include_once 'includes/templates/header.php'; ?>
        <?php
        try {
            include 'includes/functions/db_connection.php';
            $productos = $connection->query(" SELECT * FROM carrito INNER JOIN productos ON carrito.id_producto_carrito = productos.id_producto INNER JOIN usuarios ON carrito.id_usuario_carrito = usuarios.id_usuario WHERE id_usuario = $idUsuario ORDER BY id_carrito DESC ");
        } catch (Exception $e) {
            echo $e->getMessage();
        }
        if ($productos->num_rows > 0) { ?>
            <!-- POR AQUI LOS ELEMENTOS ARRIBA DEL ITEM -->
            <div class="texto-contacto">
                <h1 class="headeres">Resumen de tu orden de compra</h1>
                <p><?php echo $nombre . " " . $apellido; ?> este es el resumen de tu orden de compra, en breve te estaremos contactando</p>
            </div>
            <div class="resumenInfoOrden contenedor">
                <p>Numero de orden: <span><?php echo $idUsuario; ?></span></p>
                <p>Monto de la orden: <span><?php echo "$ " . $monto; ?></span></p>
                <p>Nombre: <span><?php echo $nombre . " " . $apellido; ?></span></p>
                <p>Email: <span><?php echo $correo; ?></span></p>
                <p>Telefono: <span><?php echo $telefono; ?></span></p>
                <p>Estado: <span><?php echo $estado; ?></span></p>
                <p>Ciudad: <span><?php echo $ciudad; ?></span></p>
                <p>Direccion 1: <span><?php echo $direccion1; ?></span></p>
                <p>Direccion 2: <span><?php echo $direccion2; ?></span></p>
                <p>Codigo Postal: <span><?php echo $codigopostal; ?></span></p>
                <p>Metodo de envio: <span><?php echo $metodoEnvio; ?></span></p>
                <p>Fecha de orden: <span><?php echo $fecha_orden; ?></span></p>
            </div>
            <h2 class="headeres">Productos de la orden</h2>
            <div class="resumen-orden contenedor">
                <?php foreach ($productos as $producto) { ?>
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
        <?php    } else { ?>
            <div class="carrito-vacio">
                <p>Aun no tienes productos en el carrito</p>
                <p>Mira nuestro <a href="productos.php">catalogo</a> para agregar un producto</p>
            </div>
        <?php    } ?>

        <?php include_once 'includes/templates/footer.php'; ?>
        <?php
        if ($filasAfectadas == 1) {
            $_SESSION = array();
        }
        ?>
    <?php    } else { ?>
        <?php include_once 'includes/templates/header.php';
        echo "Intente nuevamente";
        include_once 'includes/templates/footer.php'; ?>
    <?php } ?>
<?php } ?>