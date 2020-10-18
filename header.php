<!DOCTYPE html>
<html <?php language_attributes(); ?>>
    <head>
        <meta charset="<?php bloginfo( 'charset' ); ?>" />
        <title><?php wp_title(); ?></title>
        <link rel="stylesheet" href="<?php bloginfo( 'stylesheet_url' ); ?>">
    </head>
    <body>
        
        <header>
            <div class="container">
                <h1><?php bloginfo( 'name' ); ?></h1>
                <span><?php bloginfo( 'description' ); ?></span>
            </div><!-- .container -->	
        </header>
        
        <nav class="main-nav">
            <div class="container">
                <?php
                    $args = array(
                        'theme_location' => 'primary'
                    );
                ?>
                <?php wp_nav_menu($args); ?>
            </div><!-- .container -->
        </nav><!-- .main-nav -->