<?php
session_start();
// echo "<pre>";
//     var_dump($_SESSION);
// echo "</pre>";
// echo "<pre>";
// var_dump($_GET);
// echo "</pre>";
$sesioncerrada = "";
if(!empty($_GET['cerrarsesion'])){
    $sesioncerrada = $_GET['cerrarsesion'];
};
if ($sesioncerrada === '1') {
    $_SESSION = array();
    // echo "<pre>";
    //     var_dump($_SESSION);
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
<body class="login">
    <div class="contenedor-login">
        <h1 class="headeres" >Seccion de Administracion</h1>
        <div class="contenedor-formulario">
            <img src="../img/png.png" alt="">
                <form id="formulario" method="post">
                    <div class="campo">
                        <label for="cedula">Cedula: </label>
                        <input type="number" name="cedula" id="cedula" placeholder="Cedula de identidad">
                    </div>
                    <div class="campo">
                        <label for="password">Contraseña: </label>
                        <input type="password" name="password" id="password" placeholder="Contraseña">
                    </div>
                    <div class="campo enviar">
                        <input type="hidden" id="tipo" value="login">
                        <input type="submit" class="boton" value="Iniciar Sesión">
                    </div>
                    <?php
                    include 'includes/functions/db_connection.php';
                    try {
                        $resultado = $connection->query(" SELECT count(*) AS fila FROM administrador ");
                        $filas = $resultado->fetch_assoc();
                    } catch(Exception $e){
                        echo $e->getMessage();
                    }
                    $fila = $filas['fila'];
                    if($fila === '0'){
                        echo '<div class="campo">
                    <a href="crear-admin.php">Crear un administrador (Solo se permitira crear uno (1))</a>
                </div>';
                }
                    ?>
                </form>
        </div>
        
    </div>
    <script type="text/javascript" src="js/sweetalert2.all.min.js"></script>
    <script type="text/javascript" src="js/administracion.js"></script>
</body>
</html>