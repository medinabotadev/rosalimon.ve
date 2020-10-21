<?php
session_start();
// echo "<pre>";
// var_dump($_SESSION);
// echo "</pre>";
if ($_SESSION['sesion'] === 'usuario' || empty($_SESSION)) {
    header('Location: ../index.php');
    exit();
    // echo "<pre>";
    // var_dump($_SESSION);
    // echo "</pre>";
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/png" href="../img/title.png">
    <title>ROSALIMON | Administracion</title>
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.6.0/dist/leaflet.css" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Lato:wght@300;400;700;900&display=swap">
    <link rel="stylesheet" href="../css/normalize.css">
    <link rel="stylesheet" href="../css/lightbox.css">
    <link rel="stylesheet" href="../css/styles.css">
</head>

<body class="admin">
    <div class="barraAdmin">
        <h1>Administrador de sitio web</h1>
        <a href="login.php?cerrarsesion=1">Cerrar sesion</a>
    </div>
    <div class="contenedorAdmin">
        <aside class="menuAdmin">
            <img src="../img/png.png" alt="">
            <nav class="navAdmin">
                <p>Menu</p>
                <a href="admin.php?mostrar=ordenes" id="#"><img src="img/order.svg" alt=""> Ordenes</a>
                <a href="admin.php?mostrar=productos" id="#"><img src="img/products.svg" alt=""> Productos</a>
                <a href="admin.php?mostrar=destacados" id="#"><img src="img/star.svg" alt=""> Destacados</a>
                <a href="admin.php?mostrar=contacto" id="#"><img src="img/contact.svg" alt=""> Contactar</a>
            </nav>
        </aside>
        <main class="contenidoPrincipal">
            <!-- SECCION INFORMACION GENERAL -->
            <?php
            $informacionAmostrar = "";
            if (!empty($_GET['mostrar'])) {
                $informacionAmostrar = $_GET['mostrar'];
                // echo $_GET['mostrar'];
            }
            ?>
            <?php if (empty($_GET)) { ?>
                <?php
                try {
                    include 'includes/functions/db_connection.php';
                    $resultado = $connection->query(" SELECT count(*) AS cantidad_productos FROM productos ");
                    $filas = $resultado->fetch_assoc();
                } catch (Exception $e) {
                    echo $e->getMessage();
                }
                try {
                    include 'includes/functions/db_connection.php';
                    $resultado = $connection->query(" SELECT AVG(precio_producto) AS promedio_productos FROM productos ");
                    $promedio = $resultado->fetch_assoc();
                } catch (Exception $e) {
                    echo $e->getMessage();
                }
                try {
                    include 'includes/functions/db_connection.php';
                    $resultado = $connection->query(" SELECT count(*) AS personasAcontactar FROM contacto ");
                    $contactar = $resultado->fetch_assoc();
                } catch (Exception $e) {
                    echo $e->getMessage();
                }
                try {
                    include 'includes/functions/db_connection.php';
                    $resultado = $connection->query(" SELECT count(*) AS numeroOrdenes FROM ordenes ");
                    $numero = $resultado->fetch_assoc();
                } catch (Exception $e) {
                    echo $e->getMessage();
                }
                $cantidad_productos = $filas['cantidad_productos'];
                $promedio_productos = round($promedio['promedio_productos']);
                $personasAcontactar = $contactar['personasAcontactar'];
                $numeroOrdenes = $numero['numeroOrdenes']

                ?>
                <h1 class="headeres">Informacion general</h1>
                <div class="informacionGeneral">
                    <p>Productos en inventario:<span><?php echo $cantidad_productos; ?></span></p>
                    <p>Promedio de precios:<span><?php echo $promedio_productos . " $"; ?></span></p>
                    <p>Personas a contactar:<span><?php echo $personasAcontactar; ?></span></p>
                    <p>Numero de ordenes:<span><?php echo $numeroOrdenes; ?></span></p>
                </div>
            <?php } ?>

            <!-- SECCION ORDENES -->
            <?php if ($informacionAmostrar === 'ordenes' && isset($_GET['orden'])) { ?>
                <!-- SE MOSTRARA LA ORDEN DETALLADA -->
                <h1 class="headeres">Orden de compra #<?php echo $_GET['orden'] ?></h1>
                <?php
                $numeroDeorden = $_GET['orden'];
                try {
                    include 'includes/functions/db_connection.php';
                    $resultado = $connection->query(" SELECT * FROM ordenes WHERE id_usuario_orden = $numeroDeorden ");
                    $datosusuario = $resultado->fetch_assoc();
                } catch (Exception $e) {
                    echo $e->getMessage();
                }
                ?>
                <div class="resumenInfoOrden contenedor">
                    <p>Numero de orden: <span><?php echo $datosusuario['id_orden']; ?></span></p>
                    <p>Monto de la orden: <span><?php echo "$ " . $datosusuario['monto']; ?></span></p>
                    <p>Nombre: <span><?php echo $datosusuario['nombre'] . " " . $datosusuario['apellido']; ?></span></p>
                    <p>Email: <span><?php echo $datosusuario['correo']; ?></span></p>
                    <p>Telefono: <span><?php echo $datosusuario['telefono']; ?></span></p>
                    <p>Estado: <span><?php echo $datosusuario['estado']; ?></span></p>
                    <p>Ciudad: <span><?php echo $datosusuario['ciudad']; ?></span></p>
                    <p>Direccion 1: <span><?php echo $datosusuario['direccion_1']; ?></span></p>
                    <p>Direccion 2: <span><?php echo $datosusuario['direccion_2']; ?></span></p>
                    <p>Codigo Postal: <span><?php echo $datosusuario['codigo_postal']; ?></span></p>
                    <p>Metodo de envio: <span><?php echo $datosusuario['metodo_envio']; ?></span></p>
                    <p>Fecha de orden: <span><?php echo $datosusuario['fecha_pedido']; ?></span></p>
                </div>

                <?php try {
                    include 'includes/functions/db_connection.php';
                    $productos = $connection->query(" SELECT * FROM carrito INNER JOIN productos ON carrito.id_producto_carrito = productos.id_producto INNER JOIN usuarios ON carrito.id_usuario_carrito = usuarios.id_usuario WHERE id_usuario = $numeroDeorden ORDER BY id_carrito DESC ");
                } catch (Exception $e) {
                    echo $e->getMessage();
                } ?>
                <h2 class="headeres">Productos de la orden</h2>
                <div class="resumen-orden contenedor">
                    <?php foreach ($productos as $producto) { ?>
                        <div class="item">
                            <div class="item-carrito">
                                <img src="../media/<?php echo $producto['codigo_producto'] ?>/<?php echo $producto['img_1'] ?>" alt="">
                                <h3><?php echo $producto['nombre_producto'] ?></h3>
                                <p>Cantidad: <?php echo $producto['cantidad'] ?></p>
                                <p class="precio"><?php echo "$" . $producto['precio_producto']; ?></p>
                            </div>
                        </div>
                    <?php } ?>
                </div>
    </div>
<?php } else if ($informacionAmostrar === 'ordenes' && empty($_GET['orden'])) { ?>
    <?php
                try {
                    include 'includes/functions/db_connection.php';
                    $ordenes = $connection->query(" SELECT id_usuario_orden, monto, nombre, apellido, fecha_pedido, status FROM ordenes ORDER BY id_usuario_orden DESC");
                } catch (Exception $e) {
                    echo $e->getMessage();
                }
    ?>
    <h1 class="headeres">Ordenes de compra</h1>
    <!-- SOLO SE MOSTRARAN LAS ORDENES -->
    <div class="ordenesTodas">
        <table class="listadoOrdenes">
            <thead>
                <tr>
                    <th>Estado</th>
                    <th># de orden</th>
                    <th>Fecha</th>
                    <th>Nombre y apellido</th>
                    <th>Total</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($ordenes as $orden) { ?>
                    <tr>
                        <td><input type="checkbox" name="" id="" class="checkbox ordenes" data-ordenId="<?php echo $orden['id_usuario_orden']; ?>" <?php if ($orden['status'] == 1) { echo "checked"; }; ?>></td>
                        <td><?php echo $orden['id_usuario_orden']; ?></td>
                        <td><?php echo $orden['fecha_pedido']; ?></td>
                        <td><?php echo $orden['nombre'] . " " . $orden['apellido']; ?></td>
                        <td><?php echo $orden['monto']; ?> $</td>
                        <td>
                            <a href="admin.php?mostrar=ordenes&orden=<?php echo $orden['id_usuario_orden']; ?>"><img src="img/eye-open.svg" alt=""></a>
                            <a href="#" id="eliminar_orden" class="eliminar_orden" data-ordenId="<?php echo $orden['id_usuario_orden']; ?>"><img src="img/delete.svg" alt=""></a>
                        </td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>
<?php } ?>


<!-- SECCION PRODUCTOS Y DESTACADOS BAJO CONSTRUCCION -->
<?php if ($informacionAmostrar === 'productos' || $informacionAmostrar === 'destacados') { ?>
    <h1 class="headeres">Seccion en construccion</h1>
    <img class="enConstruccion" src="img/sketch.svg" alt="">
<?php } ?>

<!-- SECCION CONTACTO -->
<?php if ($informacionAmostrar === 'contacto') { ?>
    <?php
    try {
        include 'includes/functions/db_connection.php';
        $contactos = $connection->query(" SELECT * FROM `contacto` ORDER BY id_contacto DESC ");
    } catch (Exception $e) {
        echo $e->getMessage();
    }
    ?>
    <h1 class="headeres">Personas a contactar</h1>
    <div class="PersonasContactar">
            <table class="listadoPersonasContactar">
                <thead>
                    <tr>
                        <th>Status</th>
                        <th>Nombre</th>
                        <th>Mensaje</th>
                        <th>Correo</th>
                        <th>Telefono</th>
                        <th>Forma de contacto</th>
                        <th>Fecha de contacto</th>
                        <th>Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($contactos as $contacto) { ?>
                        <tr>
                            <td><input type="checkbox" class="checkbox" data-contactoId="<?php echo $contacto['id_contacto'] ?>" <?php if($contacto['status_contacto'] == 1){ echo 'checked'; } ?>></td>
                            <td><?php echo $contacto['nombre_contacto']; ?></td>
                            <td><?php echo $contacto['mensaje_contacto']; ?></td>
                            <td><?php echo $contacto['email_contacto']; ?></td>
                            <td><?php echo $contacto['telefono_contacto']; ?></td>
                            <td><?php echo $contacto['forma_contacto']; ?></td>
                            <td><?php echo $contacto['fecha_contacto']; ?></td>
                            <td><a href="#" id="eliminar_contacto" class="eliminar_contacto" data-contactoId="<?php echo $contacto['id_contacto']; ?>"><img src="img/delete.svg" alt=""></a></td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
    </div>
<?php } ?>
</main>
</div>

<script type="text/javascript" src="js/sweetalert2.all.min.js"></script>
<script type="text/javascript" src="js/administracion.js"></script>
</body>

</html>