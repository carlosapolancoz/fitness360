<footer class="footer contenedor">
    <hr>
    <div class="contenido-footer">
        <?php 
            $args = array(
                'theme_location' => 'menu-principal',
                'container' => 'nav',
                'container_class' => 'menu-principal'
            );

            wp_nav_menu($args);
        ?>
    </div>
</footer>
</body>
</html>