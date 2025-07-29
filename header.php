<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php wp_head(); ?>
</head>

<body <?php body_class('min-h-screen flex flex-col'); ?>>

<<<<<<< HEAD
    <header class="bg-white shadow-sm py-4">
        <div class="container mx-auto px-4 max-w-4xl flex justify-between items-center">
=======
    <header class="bg-white shadow-md py-4">
        <div class="container mx-auto px-4 flex justify-between items-center">
>>>>>>> 78e199aab7c4beb01cf8c9b0dfcbc3fce34820e7
            <div class="site-branding">
                <h1 class="text-xl font-bold">
                    <a href="<?php echo esc_url(home_url('/')); ?>" class="text-gray-800 hover:text-blue-600">
                        <?php bloginfo('name'); ?>
                    </a>
                </h1>
                <p class="text-sm text-gray-500"><?php bloginfo('description'); ?></p>
            </div>

            <nav class="site-navigation">
                <?php
                wp_nav_menu(array(
                    'theme_location' => 'primary',
                    'container'      => false,
                    'menu_class'     => 'flex gap-6 text-sm font-medium text-gray-700',
                    'fallback_cb'    => false,
                ));
                ?>
            </nav>
        </div>
    </header>