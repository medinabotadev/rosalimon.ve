<?php
include 'sesiones.php';
$accion = $_POST['accion'];
$codigo_usuario = $_SESSION['codigo_usuario'];
$id_usuario = $_SESSION['id'];

if($accion === 'agregaralcarrito'){
    $cantidad = $_POST['cantidad'];
    $codigo_producto = $_POST['codigo_producto'];
    $id_producto = $_POST['id_producto'];
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

if($_GET['accion'] === 'eliminar'){
    $idProducto = (int) filter_var($_GET['idProducto'], FILTER_SANITIZE_NUMBER_INT);

    include 'db_connection.php';
    try{
        $stmt = $connection->prepare(" DELETE FROM carrito WHERE id_producto_carrito = ? AND id_usuario_carrito = ? ");
        $stmt->bind_param('ii', $idProducto, $id_usuario);
        $stmt->execute();
        if($stmt->affected_rows == 1){
            $respuesta = array(
                'respuesta' => 'correcto'
            );
        }
            $stmt->close();
            $connection->close();
    } catch(Exception $e) {
        $respuesta = array(
            'error' => $e->getMessage()
        );
    }

    echo json_encode($respuesta);
}
?>