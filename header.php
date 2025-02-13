<!DOCTYPE html>
<html lang="<?php language_attributes(); ?>"> <!-- php hook for lang -->
<head>
    <meta charset="<?php bloginfo('charset'); ?>"> <!-- php hook for charset -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head(); ?> <!-- php hook for linking to external stylesheets and javascript -->
</head>
<body <?php body_class();?> >
<header>
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
            'fallback_cb'     =>false
        ));
        ?>
    </nav>
</header>