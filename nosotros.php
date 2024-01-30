<?php
    require 'includes/app.php';
    incluirTemplate('header');    
?>

    <main class="contenedor seccion">
        <h1>Conoce mas sobre Nosotros</h1>

        <div class="contenido-nosotros">
            <div class="imagen">
                <picture>
                    <source srcset="build/img/nosotros.webp" type="image/webp">
                    <source srcset="build/img/nosotros.jpg" type="image/jpeg">
                    <img loading="lazy" src="build/img/nosotros.jpg" alt="Sobre Nosotros">
                </picture>
            </div>

            <div class="texto-nosotros">
                <blockquote>
                    25 Años de experiencia
                </blockquote>
                <p>¡Bienvenidos a Bienes Raices! Somos un equipo apasionado y experimentado, dedicado a
                    brindarles la mejor experiencia de ventas en el mercado inmobiliario. 
                    Nos enorgullece ofrecer propiedades de alta calidad que superan las expectativas de
                    nuestros clientes en todos los aspectos. Nuestro compromiso con la excelencia se refleja
                    en cada etapa del proceso de compra y venta de propiedades, desde la presentación impecable
                    hasta el servicio personalizado y profesional. 
                    Con una amplia cartera de propiedades cuidadosamente seleccionadas, nos esforzamos por ofrecer
                    opciones que se ajusten a diversos estilos de vida y necesidades. Ya sea que esté buscando su 
                    hogar ideal o una inversión lucrativa, confíe en nosotros para encontrar la propiedad perfecta que
                    cumpla con todos sus requisitos y exceda sus expectativas.
                </p>
            </div>
        </div>
    </main>

    <section class="contenedor seccion">
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
    </section>

<?php
    incluirTemplate('footer');
?>