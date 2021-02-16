<!doctype html>
<html <?php language_attributes(); ?>>
<head>
    
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<meta name="apple-mobile-web-app-capable" content="yes">
	<meta name="apple-mobile-web-app-title" content="Dynalab">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<link rel="apple-touch-icon" href="<?php  echo get_template_directory_uri();?>/img/icono.png">
	<meta name="mobile-web-app-capable" content="yes">
	<meta name="theme-color" content="#003663">
	<meta name="application-name" content="Dynalab">
	<link rel="icon" type="image/png" href="<?php echo get_template_directory_uri();?>/img/icono.png" sizes="200x200">
	
	<?php wp_head(); ?>
</head>
<body <?php body_class();?>>

<header class="site-header">
	<div class="contenedor header-grid">
		<div class="barra-navegacion">
			<div class="logo">
				<img src="<?php echo get_template_directory_uri();?>/img/logo.svg" alt="logo sitio ">
			</div>
		
				<?php

					$args = array(
						'theme_location'  => 'menu-1',
						'container'       =>  'nav',
						'container_class' => 'menu-principal'
					);
					wp_nav_menu($args);
				?>

        </div><!-- barra de navegacion -->
        <div class="tagline textcenter">
            <h1> <?php the_field('encabezado_hero');?> </h1>
            <p><?php the_field('contenido_hero');?></p>
        </div>
	</div>
</header>
	
