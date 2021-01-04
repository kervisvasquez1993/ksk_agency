<?php

/**
  Template Name: Proyectos
 */

get_header();
?>

<main class="contenedor pagina seccion no-sidebar">
	<div class="text-center">
		<?php get_template_part( 'template-parts/paginas');?>
        <?php ksk_lista_proyecto(); ?>
	</div>

</main>

<?php
get_footer();
