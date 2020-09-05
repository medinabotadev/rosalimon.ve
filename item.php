<?php
include 'includes/functions/sesiones.php';
include_once 'includes/templates/header.php' 
?>
<?php $codigoProducto = $_GET['producto'];
    try{
    require_once 'includes/functions/db_connection.php';
    $sql = " SELECT * FROM productos WHERE codigo_producto = '$codigoProducto' ";
    $resultado = $connection->query($sql);
    } catch (\Exception $e) {
    echo $e->getMessage();
    }
    $producto = $resultado->fetch_assoc();
    if(is_null($producto)){
        die("No es valido");
    }

    // LOS PRODUCTOS ESTAN IMPRESOS POR CODIGO DE PRODUCTO, TENER A CONSIDERACION ESO, PUEDER SER IMPRESOS POR ID
    // LAS RUTAS DE LAS IMAGENES ESTAN ESTATICAS EN EL ARCHIVO PHP, SOLO EN LA BD ESTA PRESENTE EL NOMBRE DEL ARCHIVO DE LA IMAGEN
?>
<main class="descripcion-producto">
        <div class="contenedor">
            <h1 class="titulo-producto"><?php echo $producto['nombre_producto'] ?></h1>

            <div class="contenido-descripcion">
                <div class="fotos">
                    <div class="imagen-descripcion">
                        <img src="<?php 
                        if($producto['img_1'] == ''){
                       echo 'img/unnamed.jpg';
                       } else {
                       echo 'media/' . $producto['codigo_producto'] . '/' . $producto['img_1'];
                       }?>" alt="">
                    </div>


                    <div class="galeria">
                        <?php 
                        if (!$producto['img_2'] == ""){
                        echo '
                        <p>Mas imagenes</p>
                        <a href="media/' . $producto['codigo_producto'] . '/' . $producto['img_2'] . '" data-lightbox="galeria">
                            <img class="miniaturas" src="media/' . $producto['codigo_producto'] . '/' . $producto['img_2'] . '" alt="">
                        </a>';
                        }
                        if (!$producto['img_3'] == ""){
                            echo '<a href="media/' . $producto['codigo_producto'] . '/' . $producto['img_3'] . '" data-lightbox="galeria">
                                <img class="miniaturas" src="media/' . $producto['codigo_producto'] . '/' . $producto['img_3'] . '" alt="">
                            </a>';
                        }
                        if (!$producto['img_4'] == ""){
                            echo '<a href="media/' . $producto['codigo_producto'] . '/' . $producto['img_4'] . '" data-lightbox="galeria">
                                <img class="miniaturas" src="media/' . $producto['codigo_producto'] . '/' . $producto['img_4'] . '" alt="">
                            </a>';
                        }
                        if (!$producto['img_5'] == ""){
                            echo '<a href="media/' . $producto['codigo_producto'] . '/' . $producto['img_5'] . '" data-lightbox="galeria">
                                <img class="miniaturas" src="media/' . $producto['codigo_producto'] . '/' . $producto['img_5'] . '" alt="">
                            </a>';
                        }
                        if (!$producto['img_6'] == ""){
                            echo '<a href="media/' . $producto['codigo_producto'] . '/' . $producto['img_6'] . '" data-lightbox="galeria">
                                <img class="miniaturas" src="media/' . $producto['codigo_producto'] . '/' . $producto['img_6'] . '" alt="">
                            </a>';
                        }
                        if (!$producto['img_7'] == ""){
                            echo '<a href="media/' . $producto['codigo_producto'] . '/' . $producto['img_7'] . '" data-lightbox="galeria">
                                <img class="miniaturas" src="media/' . $producto['codigo_producto'] . '/' . $producto['img_7'] . '" alt="">
                            </a>';
                        }
                        ?>
                    </div>
                </div>

                <div class="texto-descripcion">
                    <p><?php echo $producto['descripcion_producto'] ?></p>
                    <p class="precio"><span>Precio por unidad: </span>$ <?php echo $producto['precio_producto'] ?></p>
                    <form class="formulario-pedido" action="">
                        <fieldset>
                            <legend>Ordenar</legend>
                            <label for="cantidad">Cantidad: </label>
                            <select name="" id="cantidad" required class="d-block">
                                <option value="" disabled selected>--Seleccione--</option>
                                <option value="1">1</option>
                            </select>

                            <input type="hidden" id="id_producto" value="<?php echo $producto['id_producto']; ?>">
                            <input type="hidden" id="codigo_producto" value="<?php echo $codigoProducto; ?>">
                            <input type="submit" value="Agregar Al Carrito" class="d-block agregarCarrito" id="agregarAlCarrito">
                        </fieldset>
                    </form>
                </div>
            </div>

        </div>

    </main>
<?php include_once 'includes/templates/footer.php' ?>