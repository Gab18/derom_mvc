<main class="contenedor seccion">
    <h1>More about us</h1>

    <div class="iconos-nosotros">
        <div class="icono">
            <img src="build/img/icono1.svg" alt="Icono seguridad" loading="lazy">
            <h3>Segurity</h3>
            <p>Acquire a property with security and confidence by searching our inventory with +3,000 100% refined properties and with the Derom Real Estate seal of quality</p>            </div>
        <div class="icono">
            <img src="build/img/icono2.svg" alt="Icono Precio" loading="lazy">
            <h3>Price</h3>
            <p>Find flat-plan projects developed by the best engineers and architects in the country and at the best price - only available at Derom Real Estate</p>            </div>
        <div class="icono">
            <img src="build/img/icono3.svg" alt="Icono Tiempo" loading="lazy">
            <h3>On time</h3>
            <p>Receive personalized advice from a team of agents trained under a customer service model and with a commercial punctuality that only Derom Real Estate offers</p>            </div>
    </div>
</main>

<section class="seccion contenedor">
    <h2>Buy, rent or sell a <span class="texto-verde">real estate</span> with us?</h2>
    
    <?php 
        include 'listado.php';
    ?>
    <div class="alinear-derecha">
        <a href="/propiedades" class="boton-verde">See all</a>
    </div>
</section>

<section class="imagen-contacto">
    <h2>Find the <span class="verde">home</span> of your dreams</h2>
    <p>Fill out the contact form and an advisor will contact you shortly</p>
    <a href="contacto.php" class="boton-amarillo">Contact us</a>
</section>

<div class="contenedor seccion seccion-inferior">
    <section class="blog">
        <h3>Our Blog</h3>

        <article class="entrada-blog">
            <div class="imagen">
                <picture>
                    <source srcset="build/img/blog1.webp" type="image/webp">
                    <source srcset="build/img/blog1.jpg" type="image/jpeg">
                    <img loading="lazy" src="build/img/blog1.jpg" alt="Texto Entrada Blog">
                </picture>
            </div>

            <div class="texto-entrada">
                <a href="entrada.php">
                    <h4>Terrace on the roof of your house</h4>
                    <p class="informacion-meta">Written on: <span>20/10/2021</span> by: <span>Admin</span> </p>
                    <p>
                        Tips to build a terrace on the roof of your house with the
                        best materials and saving money
                    </p>
                </a>
            </div>
        </article>

        <article class="entrada-blog">
            <div class="imagen">
                <picture>
                    <source srcset="build/img/blog2.webp" type="image/webp">
                    <source srcset="build/img/blog2.jpg" type="image/jpeg">
                    <img loading="lazy" src="build/img/blog2.jpg" alt="Texto Entrada Blog">
                </picture>
            </div>

            <div class="texto-entrada">
                <a href="entrada.php">
                <h4>Terrace on the roof of your house</h4>
                    <p class="informacion-meta">Written on: <span>20/10/2021</span> by: <span>Admin</span> </p>
                    <p>
                        Tips to build a terrace on the roof of your house with the
                        best materials and saving money
                    </p>
                </a>
            </div>
        </article>
    </section>

    <section class="testimoniales">
        <h3>Testimoniales</h3>

        <div class="testimonial">
            <blockquote>
            The staff behaved in an excellent way, very good attention and the house they offered me meets all my expectations.                </blockquote>
            <p>- Angel Del Rosario</p>
        </div>
    </section>
</div>