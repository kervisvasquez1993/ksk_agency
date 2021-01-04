<?php
function ksk_lista_proyecto()
{
    ?>
        <ul class="lista-proyectos">
            <?php
                $arg = array(
                    'post_type' => 'ksk_agency',
                    'post_per_page' => -1,
                    'orderby' => "title",
                    "order" => "ASC"
                    /* 'ASC' => 
                    'orderby' => 'name' */
                     );
                     $proyectos = new WP_Query($arg);
                     
                     while($proyectos->have_posts()):
                        $proyectos->the_post();
                        ?>
                            <li class="proyecto card gradiends">
                                <?php the_post_thumbnail("mediano");?>
                                <div class="contenido">
                                    <a href="<?php the_permalink();?>">
                                       <h3><?php the_title();?></h3>
                                    </a>
                                    
                                </div>
                            </li>

                        <?php
                     endwhile;
                     wp_reset_postdata();
            ?>
        </ul>
    <?php
}