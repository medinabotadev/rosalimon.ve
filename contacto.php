<?php include_once 'includes/templates/header.php' ?>

    <div class="texto-contacto">
        <h1 class="headeres">Contactanos</h1>
        <p>Estamos listos para guiarte en lo mejor de tu cuidado</p>
    </div>

    <div class="fondo-contacto">
        <main class="contacto contenedor">
            <form action="validacion_contacto.php" method="POST">
                <h3>Te gusta la formalidad?</h3>
                <p>(Recomendado para una atención personalizada)</p>
                <fieldset>
                    <legend>Información Personal</legend>

                    <label for="nombre">Nombre y Apellido:</label>
                    <input type="text" id="nombre" name="nombre" placeholder="Tu Nombre y Apellido" required>

                    <label for="email">E-mail:</label>
                    <input type="email" id="email" name="email" placeholder="Tu Correo Electronico" required>

                    <label for="telefono">Telefono:</label>
                    <input type="tel" id="telefono" name="telefono" placeholder="Tu Telefono" required>

                    <label for="mensaje">Mensaje:</label>
                    <textarea name="mensaje" id="" cols="30" rows="10" placeholder="Deja tu mensaje aqui..."></textarea>

                    <p>Como desea ser contactado?</p>

                    <div class="forma-contacto">
                        <label for="telefono">Telefono</label>
                        <input type="radio" name="formacontacto" value="telefono" id="telefono" required>

                        <label for="correo">E-Mail</label>
                        <input type="radio" name="formacontacto" value="correo" id="correo" required>
                    </div>

                </fieldset>
                <input type="submit" name="submit" value="Enviar" class="boton botonPrimario">
            </form>

            <div class="otros-metodos">
                <h3>Prefieres otros metodos?</h3>
                <p>(La manera mas fácil de contactarnos)</p>

                <div>
                    <h3>Telefonos:</h3>
                    <p>+58 424-1786651 / +58 412-9470626</p>

                    <div class="redes-sociales">
                        <h3>Redes Sociales:</h3>
                        <a href="https://www.instagram.com/rosalimon.ve/"><img src="img/instagram.svg" alt=""></a>
                        <a href="#"><img src="img/whatsapp.svg" alt=""></a>
                    </div>

                    <h3>Correo Electronico:</h3>
                    <p>rosalimon.ve@gmail.com</p>
                </div>
            </div>
        </main>
    </div>

    <div class="mapa" id="mapa">

    </div>

<?php include_once 'includes/templates/footer.php' ?>