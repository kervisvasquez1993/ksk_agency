<?php get_header();?>
<main class="contenedor pagina seccion con-sidebar">
    <div class="contenido-principal">
        <?php get_template_part("template-parts/paginas");?>
    </div>
    <?php get_sidebar('proyectos')?>
</main>


<?php get_footer();?>