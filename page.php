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

	<?php while(have_posts()) : the_post();?>

		<h1><?php the_title(); ?></h1>
			<?php 
				if(has_post_thumbnail()) :

					the_post_thumbnail('medianos'); //tamaños => thumbnail, medium, large, full 

				/* else:
					echo "no hay nada"; */
				endif;
			?>
		<?php the_content();?>
    <?php endwhile;?>

<?php
get_footer();
