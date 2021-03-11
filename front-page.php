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
<?php get_footer();?>