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
                <span>комунальне підприємство брацтво кролевецького ткацтва</span>
            </div>
            <?php wp_nav_menu(array(
                'theme_location' => 'top',
                'container' => null
            )); ?>
            <ul class="burger">
                <li class="burger-plank"></li>
            </ul>
        </nav>
        <div class="museum-name page-name">
            <?php the_post_thumbnail() 
                    //the_field('изображение_страницы') 
                    ?>
        </div>
    </header>