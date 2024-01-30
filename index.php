<?php
    require 'includes/app.php';
    incluirTemplate('header', $inicio = true);    
?>
    <main class="contenedor seccion">
        <h1>Sobre Nosotros</h1>

        <div class="iconos-nosotros">
             <div class="icono">
                <img src="build/img/icono1.svg" alt="icono seguridad" loading="lazy">
                <h3>Seguridad</h3>
                <p>En nuestra empresa la seguridad en las ventas es esencial para proteger la
                    confidencialidad de los datos de los clientes, prevenir fraudes y garantizar
                    transacciones seguras.
                </p>
             </div>
             <div class="icono">
                <img src="build/img/icono2.svg" alt="icono precio" loading="lazy">
                <h3>Precio</h3>
                <p>Ofrecemos una excelente oferta de precios, proporcionando a nuestros
                    clientes la oportunidad de obtener inmuebles de alta calidad a precios
                    competitivos y asequibles.
                </p>
             </div>
             <div class="icono">
                <img src="build/img/icono3.svg" alt="icono tiempo" loading="lazy">
                <h3>A Tiempo</h3>
                <p>Nuestra empresa se destaca por su notable inmediatez en el manejo de las operaciones. 
                    Con eficiencia y agilidad, garantizamos rápidas gestiones para satisfacción inmediata
                    de nuestros clientes.
                </p>
             </div>
        </div>
    </main>

    <section class="seccion contenedor">
        <h2>Casas y Deptos en Venta</h2>

        <?php
            include 'includes/templates/anuncios.php'
        ?>
        <div class="alinear-derecha">
            <a href="anuncios.php" class="boton-verde">Ver Todas</a>
        </div>
    </section>

    <section class="imagen-contacto">
        <h2>Encuentra la casa de tus sueños</h2>
        <p>Llena el formulario de contacto y un asesor se pondra en contacto contigo a la brevedad</p>
        <a href="contacto.php" class="boton-amarillo">Contactanos</a>
    </section>

    <div class="contenedor-seccion seccion-inferior">
        
        <section class="blog">
            
            <h3>Nuestro Blog</h3>
            
            <article class="entrada-blog">
                <div class="imagen">
                    <picture>
                        <source srcset="build/img/blog1.webp" type="image/webp">
                        <source srcset="build/img/blog1.jpeg" type="image/jpeg">
                        <img loading="lazy" src="build/img/blog1.jpg" alt="Texto entrada Blog">
                    </picture>
                </div>

                <div class="texto-entrada">
                    <a href="entrada.php">
                        <h4>Terraza en el techo de tu casa</h4>
                        <p class="informacion-meta">Escrito el: <span>20/10/2022</span> por: <span>Admin</span></p>
                        <p>Consejos para construir una terraza en tu propio techo con los mejores
                            materiales y ahorrando dinero al maximo
                        </p>
                    </a>
                </div>
            </article>

            <article class="entrada-blog">
                <div class="imagen">
                    <picture>
                        <source srcset="build/img/blog2.webp" type="image/webp">
                        <source srcset="build/img/blog2.jpeg" type="image/jpeg">
                        <img loading="lazy" src="build/img/blog2.jpg" alt="Texto entrada Blog">
                    </picture>
                </div>

                <div class="texto-entrada">
                    <a href="entrada.php">
                        <h4>Guia para la decoracion de tu hogar</h4>
                        <p class="informacion-meta">Escrito el: <span>25/10/2022</span> por: <span>Admin</span></p>
                        <p>Maximiza el espacio en tu hogar con esta guia, aprende a 
                            combinar muebles y colores para darle vida a tu espacio
                        </p>
                    </a>
                </div>
            </article>
        </section>

        <section class="testimoniales">
            <h3>Testimoniales</h3>

            <div class="testimonio">
                <blockquote>
                    El personal se comportó de excelente forma, muy buena atención y la casa 
                    que me ofrecieron cumple con todas mis expectaativas.
                </blockquote>
                <p>- Luis Scola</p>
            </div>
        </section>
         
    </div>

<?php
    incluirTemplate('footer');
?>    