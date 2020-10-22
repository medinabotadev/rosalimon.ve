<?php
$accion = $_POST['accion'];
// ORDENES
if ($accion == 'borrar_orden') {
    $orden_id = $_POST['orden_id'];
    
    try {
        include 'db_connection.php';
        $stmt = $connection->prepare(" DELETE FROM ordenes WHERE id_orden = ? ");
        $stmt->bind_param('i', $orden_id);
        $stmt->execute();
        if ($stmt->affected_rows > 0) {
            $respuesta = array(
                'respuesta' => 'correcto'
            );
        }
        $stmt->close();
        $connection->close();
    }catch(Exception $e){
        // EN CASO DE QUE HAYA UN ERROR TOMAR LA EXEPCION
        $respuesta = array(
            'error' => $e->getMessage()
        );
    }

    echo json_encode($respuesta);
}
if ($accion == 'actualizar_status_orden') {
    $orden_id = $_POST['orden_id'];
    $status = $_POST['status'];

    try {
        include 'db_connection.php';
        $stmt = $connection->prepare(" UPDATE ordenes SET status = ? WHERE id_orden = ? ");
        $stmt->bind_param('ii', $status, $orden_id);
        $stmt->execute();
        if ($stmt->affected_rows > 0) {
            $respuesta = array(
                'respuesta' => 'correcto'
            );
        }
        $stmt->close();
        $connection->close();
    }catch(Exception $e){
        // EN CASO DE QUE HAYA UN ERROR TOMAR LA EXEPCION
        $respuesta = array(
            'error' => $e->getMessage()
        );
    }

    echo json_encode($respuesta);
}
// PRODUCTOS
if ($accion == 'actualizar_producto') {
    $codigo_producto = $_POST['codigo_producto'];
    $nombre_producto = $_POST['nombre_producto'];
    $descripcion_producto = $_POST['descripcion_producto'];
    $precio_producto = $_POST['precio_producto'];
    $id_categoria_producto = $_POST['id_categoria_producto'];
    $cantidad_inventario = $_POST['cantidad_inventario'];
    $id_producto = $_POST['id_producto'];
    try{
        include 'db_connection.php';
        $stmt = $connection->prepare(' UPDATE  productos  SET  codigo_producto = ? , nombre_producto = ?, descripcion_producto = ?, precio_producto = ?, id_categoria_producto = ?, cantidad_inventario = ?, editado = NOW() WHERE id_producto = ? ');
        $stmt->bind_param('sssdiii', $codigo_producto, $nombre_producto, $descripcion_producto, $precio_producto, $id_categoria_producto, $cantidad_inventario, $id_producto);
        $stmt->execute();
        if ($stmt->affected_rows > 0) {
            $respuesta = array(
                'respuesta' => 'correcto'
            );
        }
    }catch(Exception $e){
        // EN CASO DE QUE HAYA UN ERROR TOMAR LA EXEPCION
        $respuesta = array(
            'error' => $e->getMessage()
        );
    }

    echo json_encode($respuesta);
}
if ($accion == 'borrar_producto') {
    $id_producto = $_POST['id_producto'];
    try {
        include 'db_connection.php';
        $stmt = $connection->prepare(" DELETE FROM productos WHERE id_producto = ? ");
        $stmt->bind_param('i', $id_producto);
        $stmt->execute();
        if ($stmt->affected_rows > 0) {
            $respuesta = array(
                'respuesta' => 'correcto'
            );
        }
        $stmt->close();
        $connection->close();
    }catch(Exception $e){
        // EN CASO DE QUE HAYA UN ERROR TOMAR LA EXEPCION
        $respuesta = array(
            'error' => $e->getMessage()
        );
    }

    echo json_encode($respuesta);
}
// CONTACTOS
if ($accion == 'borrar_contacto'){
    $contacto_id = $_POST['contacto_id'];

    try {
        include 'db_connection.php';
        $stmt = $connection->prepare(" DELETE FROM contacto WHERE id_contacto = ? ");
        $stmt->bind_param('i', $contacto_id);
        $stmt->execute();
        if ($stmt->affected_rows > 0) {
            $respuesta = array(
                'respuesta' => 'correcto'
            );
        }
        $stmt->close();
        $connection->close();
    }catch(Exception $e){
        // EN CASO DE QUE HAYA UN ERROR TOMAR LA EXEPCION
        $respuesta = array(
            'error' => $e->getMessage()
        );
    }

    echo json_encode($respuesta);
}
if ($accion == 'actualizar_status_contacto') {
    $contacto_id = $_POST['contacto_id'];
    $status = $_POST['status'];
    try {
        include 'db_connection.php';
        $stmt = $connection->prepare(" UPDATE contacto SET status_contacto = ? WHERE id_contacto = ? ");
        $stmt->bind_param('ii', $status, $contacto_id);
        $stmt->execute();
        if ($stmt->affected_rows > 0) {
            $respuesta = array(
                'respuesta' => 'correcto'
            );
        } else {
            $respuesta = array(
                'respuesta' => 'error'
            );
        }
        $stmt->close();
        $connection->close();
    }catch(Exception $e){
        // EN CASO DE QUE HAYA UN ERROR TOMAR LA EXEPCION
        $respuesta = array(
            'error' => $e->getMessage()
        );
    }

    echo json_encode($respuesta);
}
?>