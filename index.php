<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <header class="header">
        <div class="contenedor barra-navegacion">
            <div class="logo">

            </div>
        </div>
        <nav>
            
        </nav>
    </header>
    <main>
    <?php
        while(have_posts()): the_post();
        
            the_title();

            the_content();

        endwhile;
    ?>
    </main>
</body>
</html>


