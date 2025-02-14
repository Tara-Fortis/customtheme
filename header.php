<!DOCTYPE html>
<html lang="<?php language_attributes(); ?>"> <!-- php hook for lang -->
<head>
    <meta charset="<?php bloginfo('charset'); ?>"> <!-- php hook for charset -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head(); ?> <!-- php hook for linking to external stylesheets and javascript -->
    <!-- Bootstrap CSS and JS-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous" defer></script>
</head>
<body <?php body_class();?> >
<header class="fluid-container">
    <div>
        <a href=" <?php echo esc_url(home_url()); ?>"><!-- link to homepage -->
            <img src="<?php echo  esc_url(home_url('wp-content/uploads/2025/02/logo.jpg'));?>" alt="header logo">
        </a> <!-- image link -->
    </div>
    <nav>
        <?php
        wp_nav_menu( array( //php hook for wp to use the menu
            'menu'            => 'main', //menu name
            'theme_location'  => '',
            'depth'           => 2, // number of layers (doesn't have to be 2)
            'fallback_cb'     => false,
        ));
        ?>
    </nav>
</header>