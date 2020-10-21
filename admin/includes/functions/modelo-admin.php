<?php
$accion = $_POST['accion'];
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
if ($accion == 'actualizar_status') {
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
?>