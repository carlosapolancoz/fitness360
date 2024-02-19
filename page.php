<?php 
    get_header();
?>
    <main class="contenedor seccion">
    <?php
        while(have_posts()): the_post();
        
            the_title('<h1 class="text-center text-primary">', '</h1>');

            the_content();

        endwhile;
    ?>
    </main>
</body>
</html>


