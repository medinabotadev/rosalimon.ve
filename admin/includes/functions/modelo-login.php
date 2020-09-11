<?php
$accion = $_POST['tipo'];
$cedula = $_POST['cedula'];
$password = $_POST['password'];

if($accion === 'login'){
    include 'db_connection.php';
    try{
        $stmt = $connection->prepare(" SELECT cedula, id_admin, password FROM administrador WHERE cedula = ?");
        $stmt->bind_param("s", $cedula);
        $stmt->execute();
        // LOGUEAR USUARIO
        $stmt->bind_result($cedula_admin, $id_admin, $pass_admin);
        $stmt->fetch();
        if($cedula_admin){
            // SI EL USUARIO EXISTE VERIFICAR EL PASSWORD
            if(password_verify($password, $pass_admin)){
                // INICAR LA SESION
                session_start();
                $_SESSION['admin'] = $cedula;
                $_SESSION['id'] = $id_admin;
                $_SESSION['sesion'] = 'admin';
                $_SESSION['login'] = true;
                $_SESSION['codigo_usuario'] = "";
                // LOGIN CORRECTO
                $respuesta = array(
                    'respuesta' => 'correcto',
                    'admin' => $cedula,
                    'accion' => $accion
                );
            } else {
                // LOGIN INCORRECTO
                $respuesta = array (
                    'respuesta' => 'Contraseña incorrecta'
                );
            }
        } else {
            $respuesta = array(
                'error' => 'No ha creado el administrador'
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

if($accion === 'crear'){
    $opciones = array(
        'cost' => 12
    );
    $hash_password = password_hash($password, PASSWORD_BCRYPT, $opciones);

    include 'db_connection.php';
    try{
        $stmt = $connection->prepare(" INSERT INTO administrador (cedula, password) VALUES (?, ?) ");
        $stmt->bind_param("ss", $cedula, $hash_password);
        $stmt->execute();
        if($stmt->affected_rows > 0){
            $respuesta = array(
                'respuesta' => 'correcto',
                'accion' => $accion
            );
        } else {
            $respuesta = array(
                'respuesta' => 'error'
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
?>