<?php
    get_header();
?>
    <section class="bienvenida seccion contenedor">
        <h2 class="text-primary text-center">
            <?php the_field('encabezado'); ?>

        </h2>
        <p class="text-center">
            <?php the_field('texto_bienvenida'); ?>
        </p>
    </section>
    <section class="areas">
        <div class="area">
            <?php
            $area1 = get_field('area_1');
            $imagen = $area1['imagen']['sizes']['medium_large'];
            $texto = $area1['texto'];
            ?>
            <img src="<?php echo esc_attr($imagen) ?>" alt="Imagen <?php echo esc_attr($texto) ?>">
            <p><?php echo esc_html($texto) ?></p>
        </div>
        <div class="area">
            <?php
            $area2 = get_field('area_2');
            $imagen = $area2['imagen']['sizes']['medium_large'];
            $texto = $area2['texto'];
            ?>
            <img src="<?php echo esc_attr($imagen) ?>" alt="Imagen <?php echo esc_attr($texto) ?>">
            <p><?php echo esc_html($texto) ?></p>
        </div>
        <div class="area">
            <?php
            $area3 = get_field('area_3');
            $imagen = $area3['imagen']['sizes']['medium_large'];
            $texto = $area3['texto'];
            ?>
            <img src="<?php echo esc_attr($imagen) ?>" alt="Imagen <?php echo esc_attr($texto) ?>">
            <p><?php echo esc_html($texto) ?></p>
        </div>
        <div class="area">
            <?php
            $area4 = get_field('area_4');
            $imagen = $area4['imagen']['sizes']['medium_large'];
            $texto = $area4['texto'];
            ?>
            <img src="<?php echo esc_attr($imagen) ?>" alt="Imagen <?php echo esc_attr($texto) ?>">
            <p><?php echo esc_html($texto) ?></p>
        </div>
    </section>
    <main class="contenedor seccion">
        <h2 class="text-center text-primary">
            Nuestras Clases
        </h2>
        <?php fitness360_lista_clases(4); ?>
        <div class="contenedor-boton">
            <a href="<?php echo esc_url(get_permalink(get_page_by_path('clases'))); ?>" class="boton boton-primario">
                Ver todas las clases
            </a>
        </div>
    </main>

    <section class="contenedor seccion">
        <h2 class="text-center text-primary">
            Nuestros Instructores
        </h2>
        <p class="text-center">
            Instrutores profesionales que te ayudarán a lograr tus objetivos
        </p>
        <?php fitness360_instructores(); ?>
    </section>
    <section class="testimoniales">
        <h2 class="text-center text-blanco">
            Testimoniales
        </h2>
        <div class="contenedor-testimoniales swiper">
            <?php fitness360_testimoniales(); ?>
        </div>
    </section>
<?php
    get_footer();
?>