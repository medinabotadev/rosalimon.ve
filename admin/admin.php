<?php
session_start();
echo "<pre>";
    var_dump($_SESSION);
echo "</pre>";
if ($_SESSION['sesion'] === 'usuario' || empty($_SESSION)) {
    header('Location: ../index.php');
    exit();
    echo "<pre>";
    var_dump($_SESSION);
    echo "</pre>";
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
            <?php if(empty($_GET)){ ?>
                <?php 
                try{
                    include 'includes/functions/db_connection.php';
                    $resultado = $connection->query(" SELECT count(*) AS cantidad_productos FROM productos ");
                    $filas = $resultado->fetch_assoc();
                } catch(Exception $e){
                    echo $e->getMessage();
                }
                try{
                    include 'includes/functions/db_connection.php';
                    $resultado = $connection->query(" SELECT AVG(precio_producto) AS promedio_productos FROM productos ");
                    $promedio = $resultado->fetch_assoc();
                } catch(Exception $e){
                    echo $e->getMessage();
                }
                try{
                    include 'includes/functions/db_connection.php';
                    $resultado = $connection->query(" SELECT count(*) AS personasAcontactar FROM contacto ");
                    $contactar = $resultado->fetch_assoc();
                } catch(Exception $e){
                    echo $e->getMessage();
                }
                try{
                    include 'includes/functions/db_connection.php';
                    $resultado = $connection->query(" SELECT count(*) AS numeroOrdenes FROM ordenes ");
                    $numero = $resultado->fetch_assoc();
                } catch(Exception $e){
                    echo $e->getMessage();
                }
                $cantidad_productos = $filas['cantidad_productos'];
                $promedio_productos = round($promedio['promedio_productos']);
                $personasAcontactar = $contactar['personasAcontactar'];
                $numeroOrdenes = $numero['numeroOrdenes']

                ?>
                <h1 class="headeres">Informacion general</h1>
                <div class="informacionGeneral" >
                    <p>Productos en inventario:<span><?php echo $cantidad_productos; ?></span></p>
                    <p>Promedio de precios:<span><?php echo $promedio_productos . " $"; ?></span></p>
                    <p>Personas a contactar:<span><?php echo $personasAcontactar; ?></span></p>
                    <p>Numero de ordenes:<span><?php echo $numeroOrdenes; ?></span></p>
                </div>
            <?php } ?>

            <!-- SECCION CONTACTO -->
            <?php if($_GET['mostrar'] === 'contacto'){ ?>
                <?php 
                try{
                    include 'includes/functions/db_connection.php';
                    $contactos = $connection->query(" SELECT * FROM `contacto` ORDER BY id_contacto DESC ");
                } catch(Exception $e){
                    echo $e->getMessage();
                }
                foreach($contactos as $contacto){

                }
                ?>
                <h1 class="headeres">Personas a contactar</h1>
                <div class="PersonasContactar">
                    <?php foreach($contactos as $contacto) { ?>
                    <div class="persona">
                        <p>Nombre: <span><?php echo $contacto['nombre_contacto']; ?></span></p>
                        <p class="mensaje-persona"><?php echo $contacto['mensaje_contacto']; ?></p>
                        <p>Correo: <span><?php echo $contacto['email_contacto']; ?></span> | Telefono: <span><?php echo $contacto['telefono_contacto']; ?></span> | Contactar via: <span><?php echo $contacto['forma_contacto']; ?></span></p>
                        <p>Fecha: <span><?php echo $contacto['fecha_contacto']; ?></span></p>
                    </div>
                    <?php } ?>
                </div>
            <?php } ?>

            <!-- SECCION ORDENES -->
            <?php if($_GET['mostrar'] === 'ordenes' && isset($_GET['orden'])){ ?>
                <h1 class="headeres">Orden de compra</h1>
                <!-- SE MOSTRARA LA ORDEN DETALLADA -->
            <?php } else if($_GET['mostrar'] === 'ordenes' && empty($_GET['orden'])) { ?>
                <h1 class="headeres">Ordenes de compra</h1>
                <!-- SOLO SE MOSTRARAN LAS ORDENES -->
            <?php } ?>
        </main>
    </div>
</body>
</html>