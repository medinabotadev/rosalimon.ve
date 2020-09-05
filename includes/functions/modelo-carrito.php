<?php
include 'sesiones.php';
$cantidad = $_POST['cantidad'];
$codigo_producto = $_POST['codigo_producto'];
$id_producto = $_POST['id_producto'];
$accion = $_POST['accion'];
$codigo_usuario = $_SESSION['codigo_usuario'];
$id_usuario = $_SESSION['id'];

if($accion === 'agregaralcarrito'){
    try{
        include 'db_connection.php';
        $stmt = $connection->prepare(" INSERT INTO carrito (id_usuario_carrito, id_producto_carrito) VALUES (?, ?) ");
        $stmt->bind_param('ii', $id_usuario, $id_producto);
        $stmt->execute();
        if($stmt->affected_rows > 0){
            $respuesta = array(
                'respuesta' => 'correcto'
            );
        }
        $stmt->close();
        $connection->close();
    } catch(Exception $e){
        // EN CASO DE QUE HAYA UN ERROR TOMAR LA EXEPCION
        $respuesta = array(
            'error' => $e->getMessage()
        );
    }

    echo json_encode($respuesta);
}
// $datos = array(
//     'cantidad' => $cantidad,
//     'codigo_producto' => $codigo_producto,
//     'id_producto' => $id_producto,
//     'accion' => $accion,
//     'codigo_usuario' => $codigo_usuario,
//     'id' => $id_usuario
// );
// echo json_encode($datos);
?>