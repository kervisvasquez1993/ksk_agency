
	<footer  class="site-footer contenedor">
	<hr>		
	<div class="contenido-footer">
	    <?php
            $args = array(
             	'theme_location'  => 'menu-principal',
             	'container'       =>  'nav',
             	'container_class' => 'menu-principal'
             );
             wp_nav_menu($args);
		?>
		
		<p class="copyright"> Todo los Deserchos reservados :  <?php echo get_bloginfo('name')." ".date('Y');?></p>
	</div>
		
	</footer><!-- #colophon -->


<?php wp_footer(); ?>

</body>
</html>
