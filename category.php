<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package ksk_agency
 */

get_header();
?>


<main class="pagina seccion no-sidebars contenedor">
<?php $categoria = get_queried_object(); // retorna el query que se este ejecuntando en ese preciso momento?>
            <h2 class="text-center texto-primario">
               Categoria: <?php echo $categoria->name; ?>
            </h2>
    <ul class="listado-blog">
            <?php get_template_part('template-parts/loop', 'blog');?>
    </ul>
</main>


<?php

get_footer();
    