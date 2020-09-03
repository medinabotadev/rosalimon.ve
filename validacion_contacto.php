<?php if(isset($_POST['submit'])){
    date_default_timezone_set('America/Caracas');

    $formulario = $_POST;
    $nombre = filter_var($formulario['nombre'], FILTER_SANITIZE_STRING);
    $email = filter_var($formulario['email'], FILTER_SANITIZE_EMAIL);
    $telefono = filter_var($formulario['telefono'], FILTER_SANITIZE_NUMBER_INT);
    $mensaje = filter_var($formulario['mensaje'], FILTER_SANITIZE_STRING);
    $forma_contacto = $formulario['formacontacto'];
    $fecha_contacto = date('Y-m-d H:i:s');

    try {
        require_once 'includes/functions/db_connection.php';
        $statements = $connection->prepare("INSERT INTO `contacto` (nombre_contacto, email_contacto, telefono_contacto, mensaje_contacto, forma_contacto, fecha_contacto) VALUES (?,?,?,?,?,?)");
        $statements->bind_param("ssssss", $nombre, $email, $telefono, $mensaje, $forma_contacto, $fecha_contacto);
        $statements->execute();
        $statements->close();
        $connection->close();
        header('Location: validacion_contacto.php?registro_exitoso_=1' . '&' . 'nombre=' . $nombre);
    } catch (\Exception $e) {
        $error = $e->getMessage();
    }
}?>

<?php include_once 'includes/templates/header.php' ?>

<div class="texto-contacto">
        <h1 class="headeres">Contactanos</h1>
        <p>Estamos listos para guiarte en lo mejor de tu cuidado</p>
        <p><?php echo $_GET['nombre']; ?>,<br>te estaremos contactando en breve...</p>
</div>

<?php include_once 'includes/templates/footer.php' ?>