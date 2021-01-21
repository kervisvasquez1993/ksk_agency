<?php

/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package ksk_agency
 
  Template Name: Template para Galeria 
 */


get_header();
?>

<main class="contenedor pagina seccion ">
	<div class="contenido-principal">
	   <?php while (have_posts()) : the_post(); ?>
             <h1 class="text-center texto-primario"><?php the_title(); ?></h1>
			 <?php 
				/* $galeria = get_post_gallery($post:integer|WP_Post, $htmm:boolean) 
				obtener la galeria de la pagina actual
				*/
				$galeria = get_post_gallery(get_the_ID(), false);
				$galeria_imagen_id = explode(',',$galeria['ids']);
			?>
			<ul class="galeria-imagenes">
			   <?php 
			      $i = 1;
				  foreach($galeria_imagen_id as $id):
					$size = ($i == 4 || $i == 6) ? 'portrait' : 'square';
					$imagenThumb = wp_get_attachment_image_src($id, $size )[0];
					$imagen = wp_get_attachment_image_src($id, 'full')[0];
					?>
					<li>
					  <a href="<?php echo $imagen; ?>" data-lightbox="galeria">
					     <img src="<?php echo $imagenThumb;?>" alt="imagen">
					  </a>
					</li>


				  <?php
				   $i++;
				   endforeach;
			   ?>
			</ul>
       <?php endwhile; ?>
	</div>
</main>

<?php
get_footer();
