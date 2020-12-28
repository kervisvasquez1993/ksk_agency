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
 */

get_header();
?>

<main class="contenedor pagina seccion con-sidebar">
	<div class="contenido-principal">
     	<?php get_template_part( 'template-parts/paginas');?>
	</div>
	<!-- sideba aqui -->
	<?php get_sidebar();?>
</main>

<?php
get_footer();
