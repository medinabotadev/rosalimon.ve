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

                    <article class="banner card-banner-cinco">
                        <h2>Miscelaneos</h2>
                        <div class="content">
                        </div>
                        <div class="ver-todas">
                            <a href="#miscelaneos" class="boton botonBanners">Ver Todos</a>
                        </div>
                    </article>

                    <article class="items" id="miscelaneos">
                        <div class="item">
                            <img src="img/unnamed.jpg" alt="Producto">
                            <div class="contenido-item">
                                <h3>Paletas 18 Colores</h3>
                                <p class="precio">$</p>
                                <a href="items/item.php" class="boton botonPrimario">Ver Producto</a>
                            </div>
                        </div>

                        <div class="item">
                            <img src="img/unnamed.jpg" alt="Producto">
                            <div class="contenido-item">
                                <h3>Paletas 12 colores</h3>
                                <p class="precio">$</p>
                                <a href="items/item.php" class="boton botonPrimario">Ver Producto</a>
                            </div>
                        </div>

                        <div class="item">
                            <img src="img/unnamed.jpg" alt="Producto">
                            <div class="contenido-item">
                                <h3>Bases</h3>
                                <p class="precio">$</p>
                                <a href="items/item.php" class="boton botonPrimario">Ver Producto</a>
                            </div>
                        </div>

                        <div class="item">
                            <img src="img/unnamed.jpg" alt="Producto">
                            <div class="contenido-item">
                                <h3>Delineador</h3>
                                <p class="precio">$</p>
                                <a href="items/item.php" class="boton botonPrimario">Ver Producto</a>
                            </div>
                        </div>

                        <div class="item">
                            <img src="img/unnamed.jpg" alt="Producto">
                            <div class="contenido-item">
                                <h3>Tampax Equate 36unid</h3>
                                <p class="precio">$</p>
                                <a href="items/item.php" class="boton botonPrimario">Ver Producto</a>
                            </div>
                        </div>

                        <div class="item">
                            <img src="img/unnamed.jpg" alt="Producto">
                            <div class="contenido-item">
                                <h3>Tampax Tampax 18unid</h3>
                                <p class="precio">$</p>
                                <a href="items/item.php" class="boton botonPrimario">Ver Producto</a>
                            </div>
                        </div>

                        <div class="item">
                            <img src="img/unnamed.jpg" alt="Producto">
                            <div class="contenido-item">
                                <h3>Tampax Tampax 36unid</h3>
                                <p class="precio">$</p>
                                <a href="items/item.php" class="boton botonPrimario">Ver Producto</a>
                            </div>
                        </div>

                        <div class="item">
                            <img src="img/unnamed.jpg" alt="Producto">
                            <div class="contenido-item">
                                <h3>Shampoo & Acondicionador Suave (1 Litro)</h3>
                                <p class="precio">$ 14.00</p>
                                <a href="items/item.php" class="boton botonPrimario">Ver Producto</a>
                            </div>
                        </div>

                        <div class="item">
                            <img src="img/unnamed.jpg" alt="Producto">
                            <div class="contenido-item">
                                <h3>Shampoo & Acondicionador Suave (350ml)</h3>
                                <p class="precio">$ 9.50</p>
                                <a href="items/item.php" class="boton botonPrimario">Ver Producto</a>
                            </div>
                        </div>

                        <div class="item">
                            <img src="img/unnamed.jpg" alt="Producto">
                            <div class="contenido-item">
                                <h3>Toallas desmaquillantes</h3>
                                <p class="precio">$</p>
                                <a href="items/item.php" class="boton botonPrimario">Ver Producto</a>
                            </div>
                        </div>

                        <div class="item">
                            <img src="img/unnamed.jpg" alt="Producto">
                            <div class="contenido-item">
                                <h3>Talco Pies Spray Men</h3>
                                <p class="precio">$</p>
                                <a href="items/item.php" class="boton botonPrimario">Ver Producto</a>
                            </div>
                        </div>

                        <div class="item">
                            <img src="img/unnamed.jpg" alt="Producto">
                            <div class="contenido-item">
                                <h3>Boquilla Wilton para Reposteria</h3>
                                <p class="precio">$</p>
                                <a href="items/item.php" class="boton botonPrimario">Ver Producto</a>
                            </div>
                        </div>

                        <div class="item">
                            <img src="media/B13/B13.1.jpg" alt="Producto">
                            <div class="contenido-item">
                                <h3>Garnier SkinActive Micellar Cleansing Water, For Waterproof Makeup, 3.4 fl. oz.</h3>
                                <p class="precio">$</p>
                                <a href="items/item.php" class="boton botonPrimario">Ver Producto</a>
                            </div>
                        </div>

                        <div class="item">
                            <img src="media/B14/B14.1.jpg" alt="Producto">
                            <div class="contenido-item">
                                <h3>Neutrogena Clear Pore Oil-Eliminating Astringent, 8 fl. oz</h3>
                                <p class="precio">$</p>
                                <a href="items/item.php" class="boton botonPrimario">Ver Producto</a>
                            </div>
                        </div>

                        <div class="item">
                            <img src="media/B15/B15.1.jpg" alt="Producto">
                            <div class="contenido-item">
                                <h3>BEAUTY TREATS Lip Scrub - Dark Cherry</h3>
                                <p class="precio">$</p>
                                <a href="items/item.php" class="boton botonPrimario">Ver Producto</a>
                            </div>
                        </div>
                        
                        <div class="item">
                            <img src="media/B16/B16.1.jpeg" alt="Producto">
                            <div class="contenido-item">
                                <h3>LWS LA Wholesale Store 1 pc LA Girl Pro Setting Spray Cosmetics Matte Finish Makeup High Definition HD</h3>
                                <p class="precio">$</p>
                                <a href="items/item.php" class="boton botonPrimario">Ver Producto</a>
                            </div>
                        </div>

                        <div class="item">
                            <img src="img/unnamed.jpg" alt="Producto">
                            <div class="contenido-item">
                                <h3>Dermisa Skin Fade Cream. Helps with Marks from Acne, Aging, Pregnancy and Use of Birth Control Pills. Skin Lightening and Moisturizing. Non-Greasy & Quick Absorbing. 0.90 Oz / 25 g. Pack of 6</h3>
                                <p class="precio">$</p>
                                <a href="items/item.php" class="boton botonPrimario">Ver Producto</a>
                            </div>
                        </div>
                        
                        <div class="item">
                            <img src="media/B18/B18.1.jpg" alt="Producto">
                            <div class="contenido-item">
                                <h3>So Fresh So Clean Funky Facial Cleansing Power Brush</h3>
                                <p class="precio">$</p>
                                <a href="items/item.php" class="boton botonPrimario">Ver Producto</a>
                            </div>
                        </div>

                        <div class="item">
                            <img src="media/B19/B19.1.jpg" alt="Producto">
                            <div class="contenido-item">
                                <h3>Freeman Bare Foot Overnight Foot Treatment Marula Oil & Cocoa Butter</h3>
                                <p class="precio">$</p>
                                <a href="items/item.php" class="boton botonPrimario">Ver Producto</a>
                            </div>
                        </div>

                        <div class="item">
                            <img src="media/B20/B20.1.jpg" alt="Producto">
                            <div class="contenido-item">
                                <h3>Equate Ultra Broad Spectrum Zinc Sunscreen, SPF 50, 1 fl oz</h3>
                                <p class="precio">$</p>
                                <a href="items/item.php" class="boton botonPrimario">Ver Producto</a>
                            </div>
                        </div>

                        <div class="item">
                            <img src="media/B21/B21.1.jpg" alt="Producto">
                            <div class="contenido-item">
                                <h3>Hello Activated Charcoal + Dragon Fruit Fluoride Free Toothpaste 4oz</h3>
                                <p class="precio">$</p>
                                <a href="items/item.php" class="boton botonPrimario">Ver Producto</a>
                            </div>
                        </div>

                        <div class="item">
                            <img src="img/unnamed.jpg" alt="Producto">
                            <div class="contenido-item">
                                <h3>SET DE BROCHAS KABUQUI NEON</h3>
                                <p class="precio">$</p>
                                <a href="items/item.php" class="boton botonPrimario">Ver Producto</a>
                            </div>
                        </div>

                        <div class="item">
                            <img src="img/unnamed.jpg" alt="Producto">
                            <div class="contenido-item">
                                <h3>ESPEJOS TORNASOL ROSADO</h3>
                                <p class="precio">$</p>
                                <a href="items/item.php" class="boton botonPrimario">Ver Producto</a>
                            </div>
                        </div>

                        <div class="item">
                            <img src="img/unnamed.jpg" alt="Producto">
                            <div class="contenido-item">
                                <h3>ILUMINADOR MEIS</h3>
                                <p class="precio">$</p>
                                <a href="items/item.php" class="boton botonPrimario">Ver Producto</a>
                            </div>
                        </div>

                        <div class="item">
                            <img src="img/unnamed.jpg" alt="Producto">
                            <div class="contenido-item">
                                <h3>RELOJES</h3>
                                <p class="precio">$</p>
                                <a href="items/item.php" class="boton botonPrimario">Ver Producto</a>
                            </div>
                        </div>
                    </article>

                </main>
            </div>
        </div>
    </div>
<?php $connection->close(); ?>
<?php include_once 'includes/templates/footer.php'; ?>