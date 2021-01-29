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


<main class="pagina seccion no-sidebars cotenedor">
    <ul class="listado-blog">
            <?php while(have_posts()): the_post();?>
                <li class="card gradient">
                    <?php the_post_thumbnail('mediano');?>
                    <?php the_category();?>
                    <div class="contenido">
                        <a href="<?php the_permalink();?>">
                            <h3><?php the_title();?></h3>
                        </a>
                        <p class="meta">
                            <span>Por:  </span>
                            <a href="<?php echo get_author_posts_url(get_the_author_meta('ID'));?>">
                                <?php echo get_the_author_meta("display_name");?>
                            </a>
                           
                        </p>
                        <p class="meta">
                            <span>Fecha: </span>
                            <?php the_time( get_option('data_format') );?> 
                        </p>
                    </div>
                
                </li>


            <?php endwhile;?>
    
    </ul>
</main>


<?

get_footer();
    