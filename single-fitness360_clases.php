<?php 
    get_header();
?>
    <main class="contenedor seccion con-sidebar">
        <section class="contenido-principal">
            <?php
                get_template_part('template-parts/clase');
            ?>
        </section>
        <aside>
            <h2>SideBar Aquí</h2>
        </aside>
    </main>
<?php
    get_footer();
?>

