<?php
function usuario_autenticado(){
    if(!revisar_usuario()){
        include 'crear-usuario.php';
        crearUsuario();
    } // else {
    //     echo "<p>Ya ha iniciado sesion. " . "El ID de la sesion es " . $_SESSION['id'] . "</p>";
    //     echo "<p>El codigo del usuario es: " . $_SESSION['codigo_usuario'] . "</p>";
    // }
}
function revisar_usuario(){
    return isset($_SESSION['codigo_usuario']);
}

session_start();
usuario_autenticado();
?>