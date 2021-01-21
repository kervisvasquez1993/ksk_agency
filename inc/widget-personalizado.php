<?php

class Ksk_agency_class extends WP_Widget {

	
	function __construct() {
		parent::__construct(
			'Ksk_agency_class', // Base ID
			esc_html__( 'ksk_agency titulo', 'ksk_agency' ), // Name
			array( 'description' => esc_html__( 'Un widget para ksk_agency', 'ksk_agency' ), ) // Args
		);
	}
	public function widget( $args, $instance ) {
		echo $args['before_widget'];
		if ( ! empty( $instance['title'] ) ) {
			echo $args['before_title'] . apply_filters( 'widget_title', $instance['title'] ) . $args['after_title'];
		}

		$cantidad = $instance['cantidad'];
		?>
		<ul>
			<?php 
				$args = array(
					'post_type' => 'ksk_agency',
					'posts_per_page' => $cantidad,
					'orderby' => 'rand'
				);

				$proyecto = new WP_Query($args);

				while($proyecto->have_posts()):
					$proyecto->the_post();
					?>
						<li class="proyecto-sidebar">
							<div class="imagen">
								<?php the_post_thumbnail("thumbnail");?>
							</div>
							<div class="contenido-proyecto">
								<a href="<?php the_permalink();?>">
									<h3><?php the_title();?></h3>
								</a>
							</div>
						</li>
					<?php
					
				endwhile;	wp_reset_postdata();
			?>
		
		</ul>
		
		<?php
		echo $args['after_widget'];
	}
	public function form( $instance ) {
		$cantidad = !empty($instance['cantidad']) ? $instancia['cantidad'] : esc_html__( "Cuantos Proyectos deseas Mostrar", "ksks_agency" );
	?>

		<p>
			<label for="<?echo esc_attr($this->get_field_id('cantidad'));?>">
				<?php esc_attr_e( "Cuantos Proyectos deseas mostrar", "ksk_agency");?>
			</label>
			<input 
			   class="widefat"
			   id="<?php echo esc_attr($this->get_field_id('cantidad'));?>"
			   name="<?php echo esc_attr($this->get_field_name('cantidad'));?>"
			   value = "<?php echo esc_attr( $cantidad );?>"
			   type="number"
			   >
		</p>
		<?php 
	}

	
	public function update( $new_instance, $old_instance ) {
		$instance = array();
		$instance['cantidad'] = ( ! empty( $new_instance['cantidad'] ) ) ? sanitize_text_field( $new_instance['cantidad'] ) : '';
		echo $instance;
		return $instance;

	}

} // class Ksk_agency_class

// register Ksk_agency_class widget
function register_Ksk_agency_class() {
    register_widget( 'Ksk_agency_class' );
}
add_action( 'widgets_init', 'register_Ksk_agency_class' );