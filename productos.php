<?php include_once 'includes/templates/header.php' ?>
    <div class="pagina-productos">
        <div class="contenedor">
            <div class="contenido-paginaproductos">
                <aside class="sidebar categorias">
                    <h3>Categorias</h3>
                    <ul>
                    <?php
                        try{
                        require_once 'includes/functions/db_connection.php';
                        $sql = " SELECT categoria FROM categorias ";
                        $resultado = $connection->query($sql);
                        } catch (\Exception $e) {
                        echo $e->getMessage();
                        }
                    ?>
                    <?php while($categorias = $resultado->fetch_assoc()) { ?>
                        <li>
                            <a href="#<?php echo strtolower($categorias['categoria']); ?>"><?php echo $categorias['categoria'];?></a>
                        </li>
                    <?php } ?>
                    </ul>
                </aside>
                <main class="banners">
                    <h1>
                        Nuestros Productos
                    </h1>
                    <article class="banner card-banner-uno">
                        <h2>Skincare</h2>
                        <div class="content">
                        </div>
                        <div class="ver-todas">
                            <a href="#skincare" class="boton botonBanners vertodosjs">Ver Todos</a>
                        </div>
                    </article>

                    <article class="items" id="skincare">
                    <?php
                        try{
                        require_once 'includes/functions/db_connection.php';
                        $sql = " SELECT codigo_producto, nombre_producto, precio_producto, img_1 FROM productos WHERE id_categoria_producto = 1 ";
                        $resultado = $connection->query($sql);
                        } catch (\Exception $e) {
                        echo $e->getMessage();
                        }
                    ?>
                    <?php while($productos = $resultado->fetch_assoc()) { ?>
                        <div class="item">
                            <img src="media/<?php echo $productos['codigo_producto']; ?>/<?php echo $productos['img_1']; ?>" alt="Producto">
                            <div class="contenido-item">
                                <h3><?php echo $productos['nombre_producto'];; ?></h3>
                                <p class="precio"><?php echo "$" . $productos['precio_producto']; ?></p>
                                <a href="items/item_<?php echo strtolower($productos['codigo_producto']); ?>.php" class="boton botonPrimario">Ver Producto</a>
                            </div>
                        </div>
                    <?php } ?>
                    </article>

                    <article class="banner card-banner-dos">
                        <h2>Bodycare</h2>
                        <div class="content">
                        </div>
                        <div class="ver-todas">
                            <a href="#bodycare" class="boton botonBanners">Ver Todos</a>
                        </div>
                    </article>

                    <article class="items" id="bodycare">
                    <?php
                        try{ 
                        require_once 'includes/functions/db_connection.php';
                        $sql = " SELECT codigo_producto, nombre_producto, precio_producto, img_1 FROM productos WHERE id_categoria_producto = 2 ";
                        $resultado = $connection->query($sql);
                        } catch (\Exception $e) {
                            echo $e->getMessage();
                        }
                    ?>
                    <?php while($productos = $resultado->fetch_assoc()) { ?>
                        <div class="item">
                            <img src="media/<?php echo $productos['codigo_producto']; ?>/<?php echo $productos['img_1']; ?>" alt="Producto">
                            <div class="contenido-item">
                                <h3><?php echo $productos['nombre_producto']; ?></h3>
                                <p class="precio"><?php echo "$" . $productos['precio_producto']; ?></p>
                                <a href="items/item_<?php echo strtolower($productos['codigo_producto']); ?>.php" class="boton botonPrimario">Ver Producto</a>
                            </div>
                        </div>
                    <?php } ?>
                    </article>

                    <article class="banner card-banner-tres">
                        <h2>Haircare</h2>
                        <div class="content">
                        </div>
                        <div class="ver-todas">
                            <a href="#haircare" class="boton botonBanners">Ver Todos</a>
                        </div>
                    </article>

                    <article class="items" id="haircare">
                    <?php
                        try{ 
                        require_once 'includes/functions/db_connection.php';
                        $sql = " SELECT codigo_producto, nombre_producto, precio_producto, img_1 FROM productos WHERE id_categoria_producto = 3 ";
                        $resultado = $connection->query($sql);
                        } catch (\Exception $e) {
                            echo $e->getMessage();
                        }
                    ?>
                    <?php while($productos = $resultado->fetch_assoc()) { ?>
                        <div class="item">
                            <img src="media/<?php echo $productos['codigo_producto']; ?>/<?php echo $productos['img_1']; ?>" alt="Producto">
                            <div class="contenido-item">
                                <h3><?php echo $productos['nombre_producto'];; ?></h3>
                                <p class="precio"><?php echo "$" . $productos['precio_producto']; ?></p>
                                <a href="items/item_<?php echo strtolower($productos['codigo_producto']); ?>.php" class="boton botonPrimario">Ver Producto</a>
                            </div>
                        </div>
                    <?php } ?>
                    </article>

                    <article class="banner card-banner-cuatro">
                        <h2>Makeup</h2>
                        <div class="content">
                        </div>
                        <div class="ver-todas">
                            <a href="#makeup" class="boton botonBanners">Ver Todos</a>
                        </div>
                    </article>

                    <article class="items" id="makeup">
                    <?php
                        try{ 
                        require_once 'includes/functions/db_connection.php';
                        $sql = " SELECT codigo_producto, nombre_producto, precio_producto, img_1 FROM productos WHERE id_categoria_producto = 4 ";
                        $resultado = $connection->query($sql);
                        } catch (\Exception $e) {
                            echo $e->getMessage();
                        }
                    ?>
                    <?php while($productos = $resultado->fetch_assoc()) { ?>
                        <div class="item">
                            <img src="media/<?php echo $productos['codigo_producto']; ?>/<?php echo $productos['img_1']; ?>" alt="Producto">
                            <div class="contenido-item">
                                <h3><?php echo $productos['nombre_producto'];; ?></h3>
                                <p class="precio"><?php echo "$" . $productos['precio_producto']; ?></p>
                                <a href="items/item_<?php echo strtolower($productos['codigo_producto']); ?>.php" class="boton botonPrimario">Ver Producto</a>
                            </div>
                        </div>
                    <?php } ?>
                    </article>
                </main>
            </div>
        </div>
    </div>
<?php $connection->close(); ?>
<?php include_once 'includes/templates/footer.php'; ?>