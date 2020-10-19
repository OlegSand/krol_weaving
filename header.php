<!DOCTYPE html>
<html lang="uk-UA">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title><?php bloginfo( 'description' ); ?></title>
	<?php wp_head(); ?>
</head>
<body>
    <header class="header">
        <nav class="container">
            <div class="logo">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/logo.png" alt="logo">
                <span><?php the_field('наименование_логотипа') ?></span>
            </div>
            <?php wp_nav_menu(array(
                'theme_location' => 'top',
                'container' => null
            )); ?>
            <!-- <ul class="menu">
                <li><a href="#">Головна</a></li>
                <li><a href="#">Про елемент</a></li>
                <li><a href="#">Носії</a></li>
                <li><a href="#">Освіта</a></li>
                <li><a href="#">Проекти</a></li>
                <li><a href="#">Охорона</a></li>
                <li><a href="#">Новини</a></li>
            </ul> -->
            <ul class="burger">
                <li class="burger-plank"></li>
            </ul>
        </nav>
        <div class="museum-name">
            <img src="<?php the_field('main_header_bg') ?>" alt="header-bg">
            
            <h1><?php the_field('main_header_text') ?></h1>
        </div>
    </header>