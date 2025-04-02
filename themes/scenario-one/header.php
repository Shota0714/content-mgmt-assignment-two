<!DOCTYPE html>
<html lang="<?php language_attributes(); ?>">
    <head>
        <meta charset="<?php bloginfo('charset'); ?>">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <?php wp_head(); ?>
        <link href="<?php echo esc_url(home_url('wp-content/themes/scenario-one/css/custom-style.css')); ?>" rel="stylesheet">
    </head>
    <body <?php body_class(); ?>>
        <header class="header">
            <div class="header-logo">
                <a href="<?php echo esc_url(home_url()); ?>">
                    <img src="<?php echo esc_url(home_url('wp-content/uploads/2025/04/logo.png')); ?>" alt="header logo">
                </a>
            </div>
            <nav class="site-navigation">
                <?php
                wp_nav_menu(array(
                    'menu'           => 'main',
                    'theme_location' => '',
                    'depth'          => 2,
                    'fallback_cb'    => false
                ));
                ?>
            </nav>
        </header>