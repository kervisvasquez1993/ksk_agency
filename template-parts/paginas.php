<?php while (have_posts()) : the_post(); ?>

			<h1 class="text-center texto-primario"><?php the_title(); ?></h1>
			<?php
			if (has_post_thumbnail()) :

				the_post_thumbnail('blog', array('class' => 'imagen-destacada')); //tamaños => thumbnail, medium, large, full 
			endif;
			// revisar el custom post type existe

			if(get_post_type() === "ksk_agency")
			{
				echo "prueba";
			}

			?>

			<?php the_content(); ?>
		<?php endwhile; ?>