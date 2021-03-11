<?php get_header('front');?>
<section class=" bienvenida text-center section">
    <h2 class="texto-primario"> <?php the_field('encabezado_bienvenida');?> </h2>
    <p><?php the_field('texto_bienvenida')?></p>
</section>

<div class="seccion-areas">
    <ul class="contenido-areas">
       <li class="area">
            <?php 
                $area1 = get_field('area2');
                $imagen = wp_get_attachment_image_src($area1['area_imagen'], 'medianos')[0];
                
            ?>
            <img src="<?php echo esc_attr($imagen);?>">
            <p> <?php echo esc_html( $area1['texto'] )?></p>
        </li>
        <li class="area">
            <?php 
                $area2 = get_field('area3');
                $imagen = wp_get_attachment_image_src($area2['area_imagen'], 'medianos')[0];
                
            ?>
            <img src="<?php echo esc_attr($imagen);?>">
            <p> <?php echo esc_html( $area1['texto'] )?></p>
        </li>
        <li class="area">
            <?php 
                $area3 = get_field('area4');
                $imagen = wp_get_attachment_image_src($area3['area_imagen'], 'medianos')[0];
                
            ?>
            <img src="<?php echo esc_attr($imagen);?>">
            <p> <?php echo esc_html( $area1['texto'] )?></p>
        </li>
        <li class="area">
            <?php 
                $area4 = get_field('area5');
                $imagen = wp_get_attachment_image_src($area4['area_imagen'], 'medianos')[0];
                
            ?>
            <img src="<?php echo esc_attr($imagen);?>">
            <p> <?php echo esc_html( $area1['texto'] )?></p>
        </li>
    </ul>
</div>

<section class="clases">
    <div class="contenedor seccion">
        <h2 class="text-center texto-primario"> Nuestros Proyectos</h2>
        <?php ksk_lista_proyecto(4); ?>
        <div class="contenedor-boton">
            <a href="<?php echo esc_url(get_permalink(get_page_by_title('Portafolio')));?>" class="boton boton-primario">
                Ver Todo los Proyectos
            </a>
        </div>
    </div>
</section>

<section class="instructores">
    <div class="contenedor seccion">
        <h2 class="text-center texto-primario">Nuestros Instructores</h2>
        <p class="text-center">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Asperiores, architecto distinctio quaerat at earum qui!</p>
        <ul class="listado-perfil">
            <?php 
                $args = array(
                    'post_type' => 'perfil',
                    'posts_per_page' => -1
                );

                $perfil = new WP_Query($args);

                while($perfil->have_posts()) : $perfil->the_post();
            ?>

                    <li class="perfil">
                        <?php the_post_thumbnail("mediano")?>
                        <div class="contendio text-center">
                            <h3><?php the_title(); ?></h3>
                            <?php the_content(); ?>
                            <div class="especialidad">
                                <?php 
                                 $esp = get_field('especialidad');
                                 foreach($esp as $e):
                                ?>
                                    <span class="etiqueta"> <?php echo esc_html($e); ?></span>
                                <?php endforeach;?>
                            </div>
                        </div>
                    </li>

            <?php endwhile; wp_reset_postdata();?>
        </ul>
    </div>
</section>
<?php get_footer();?>