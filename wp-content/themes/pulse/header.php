<!DOCTYPE html>
<html lang="en">

<head>
    <meta name="" content="" />
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head(); ?>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
          integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z"
          crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.2/css/all.css"
          integrity="sha384-vSIIfh2YWi9wW0r9iZe7RJPrKwp6bG+s9QZMoITbCckVJqGCCRhc+ccxNcdpHuYu"
          crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/stellarnav.min.css">
    <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/owl.carousel.min.css">
    <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/owl.theme.default.min.css">
    <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/style.css">
    <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/responsive.css">
    



</head>

<body>
   

    <head>
</div>

<div class="sn-header navigation-bar stick bg-transparent">
    <div class="container mx-auto px-4">
        <nav class="flex items-center justify-between py-4">
            <a class="logo" href="<?php echo home_url(); ?>" title="logo">
                <img src="<?php the_field('logo', 'option'); ?>" alt="Logo" class="h-10">
            </a>
            <div class="menu mr-4">
                <?php
                wp_nav_menu(array('theme_location' => 'menu-1', 'container_class' => 'stellarnav'));
                ?>
            </div>
            <div class="search-bar hidden md:flex items-center">
              <form action="<?php echo home_url();?>" method="get" class="flex items-center">
                <input type="text" name="s" placeholder="Search..." class="form-control px-2 py-1">
                <button type="submit" class="btn px-2 py-1"><i class="fas fa-search" aria-hidden="true"></i></button>
              </form>
            </div>
            <!-- Website logos Pop Bottom -->
            <?php if ( is_active_sidebar( 'custom-widget-area' ) ) : ?>
                <div id="custom-widget-area" class="widget-area">
                    <?php dynamic_sidebar( 'custom-widget-area' ); ?>
                </div>
            <?php endif; ?>
            

            <script>
                // Function to toggle the visibility of the web-links
            function toggleWebLinks() {
                var links = document.getElementById("web-links");
                links.classList.toggle("hidden");
            }

            // Function to close the dropdown if clicking outside of it
            document.addEventListener('click', function(event) {
                var isClickInside = document.getElementById('web-pop-bottom').contains(event.target);
                var links = document.getElementById("web-links");

                if (!isClickInside && !links.classList.contains('hidden')) {
                    links.classList.add('hidden');
                }
            });

            </script>

            
        </nav>
    </div>
</div>

</head>

