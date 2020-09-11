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
<a href="login.php?cerrarsesion=1">Cerrar sesion</a>