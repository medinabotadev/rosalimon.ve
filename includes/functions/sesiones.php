<?php
function usuario_autenticado(){
    // SI DEVUELVO TRUE NO HACE NADA (Mantiene la sesion del usuario)
    if(!revisar_usuario()){
        include 'crear-usuario.php';
        crearUsuario();
    }
    echo "<pre>";
        var_dump($_SESSION);
    echo "</pre>";
}
function revisar_usuario(){
    $sesion = $_SESSION['sesion'];
    if ($sesion === 'usuario') {
        return true;
    } else if ($sesion === 'admin') {
        $_SESSION = array();
        return false;
    }
}

session_start();
usuario_autenticado();
?>