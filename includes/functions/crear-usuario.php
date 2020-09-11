<?php
function crearUsuario(){
    $path = (basename($_SERVER['PHP_SELF']));
    $query = ($_SERVER['QUERY_STRING']);

// SI EL USUARIO NO ESTA AUTENTICADO LO CREAMOS Y AUTOLOGUEAMOS

// OBTENEMOS LA FECHA PARA USARLA COMO CODIGO DE USUARIO
$fecha = date('Y-m-d H:i:s');

// HASHEAMOS LA FECHA PARA USARLA COMO IDENTIFICADOR DEL USUARIO
$opciones = array(
    'cost' => 12
);
$hash_fecha = password_hash($fecha, PASSWORD_BCRYPT, $opciones);

// ASIGNAMOS EL VALOR DE LA FECHA HASHEADA AL CODIGO USUARIO DEL USUARIO
$codigo_usuario = $hash_fecha;

// CREAMOS LA CONEXION CON LA BASE DE DATOS QUE INCLUIRA AL USUARIO EN ELLA
include 'db_connection.php';
try {
    $stmt = $connection->prepare(" INSERT INTO usuarios (codigo_usuario) VALUES (?) ");
    $stmt->bind_param('s', $codigo_usuario);
    $stmt->execute();
    if($stmt->affected_rows > 0){
        session_start();
        $_SESSION['codigo_usuario'] = $codigo_usuario;
        $_SESSION['id'] = $stmt->insert_id;
        $_SESSION['sesion'] = 'usuario';
        $_SESSION['login'] = true;
    }
    $stmt->close();
    $connection->close();
    // SE REDIRECCIONA LA PAGINA YA QUE SIN ESTO AL INGRESAR AL SITIO POR PRIMERA VEZ
    // NO MOSTRABA LOS OTROS ELEMENTOS TRAIDOS DE LA BASE DE DATOS
    // SE DEBE TENER EN CUENTA ESTO SI SE DESEA IMPRIMIR DESDE LA BD OTROS ELEMENTOS
    if($path === 'productos.php'){
        header('Location: ' . $path);
    } else if($path === 'item.php') {
        header('Location: ' . $path . '?' . $query);
    }
} catch (Exception $e) {
    echo $e->getMessage();
}
}
?>