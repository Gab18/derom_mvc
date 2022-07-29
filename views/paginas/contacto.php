<main class="contenedor seccion">
    <h1>Contact</h1>

    <?php if($mensaje) { ?>
        <p class="alerta exito"><?php echo $mensaje; ?></p>
    <?php } ?>
    
    <picture>
        <img loading="lazy" src="build/img/destacada3.jpg" alt="Imagen Contacto">
    </picture>

    <h2>Fill in the contact form</h2>

    <form class="formulario" method="POST" action="/contacto">
        <fieldset>
            <legend>Personal information</legend>

            <label for="nombre">Name</label>
            <input type="text" placeholder="Name" id="nombre" name="contacto[nombre]">

            <label for="mensaje">Menssage:</label>
            <textarea id="mensaje" name="contacto[mensaje]"></textarea>
        </fieldset>

        <fieldset>
            <legend>Information about the property</legend>

            <label for="opciones">Sell, Buy or Rent:</label>
            <select id="opciones" name="contacto[tipo]">
                <option value="" disabled selected>-- Selected --</option>
                <option value="vende">Sell</option>
                <option value="compra">Buy</option>
                <option value="renta">Rent</option>
            </select>

            <label for="presupuesto">Budget</label>
            <input type="number" placeholder="Budget" id="presupuesto" name="contacto[precio]">

        </fieldset>

        <fieldset>
            <legend>Information about the property</legend>

            <p>How would you like to be contacted?</p>

            <div class="forma-contacto">
                <label for="contactar-telefono">Telephone</label>
                <input type="radio" value="telefono" id="contactar-telefono" name="contacto[contacto]">

                <label for="contactar-email">E-mail</label>
                <input type="radio" value="email" id="contactar-email" name="contacto[contacto]">
            </div>

            <div id="contacto"></div>

        </fieldset>

        <input type="submit" value="Enviar" class="boton-verde">
    </form>
</main>