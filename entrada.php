<?php
    require 'includes/funciones.php';
    incluirTemplate('header');    
?>

    <main class="contenedor seccion contenido-centrado">
        <h1>Guia para la decoracion de tu hogar</h1>

        <picture>
            <source srcset="build/img/destacada2.webp" type="image/webp">
            <source srcset="build/img/destacada2.jpg" type="image/jpeg">
            <img loading="lazy" src="build/img/destacada2.jpg" alt="imafen de la propiedad">
        </picture>

        <p class="informacion-meta">Escrito el: <span>20/10/2022</span> por: <span>Admin</span></p>

        <div class="resumen-propiedad">
            <p>Transforma tu hogar en un oasis de estilo con estas ideas de decoración. Añade un toque de
                frescura con plantas de interior en macetas elegantes y jarrones de vidrio. Cambia los cojines
                del sofá para darle vida a la sala de estar y opta por colores audaces que contrasten con los 
                tonos neutros de las paredes. Coloca espejos estratégicamente para crear una sensación de 
                amplitud en espacios pequeños. No olvides iluminar cada rincón con lámparas de diseño que 
                añadan calidez. Finalmente, personaliza tu hogar con fotografías y arte que reflejen tu 
                personalidad. ¡Tu hogar será un refugio acogedor y con estilo!
            </p>
        </div>
    </main>

<?php
    incluirTemplate('footer');
?>