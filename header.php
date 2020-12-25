<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>

	<?php wp_head();?>
</head>
<body>

<header class="site-header">
	<div class="container">
		<div class="barra-navegacion">
			<div class="logo">
				<img src="<?php echo get_template_directory_uri();?>/img/logo.svg" alt="logo sitio ">
			</div>
			<nav>
				<?php

					$args = array(
						'theme_location'  => 'menu-1',
						'container'       =>  'nav',
						'container_class' => 'menu_principal_css'
					);
					wp_nav_menu($args);
				?>
			</nav>
		</div>
	</div>
</header>
	
</body>
</html>