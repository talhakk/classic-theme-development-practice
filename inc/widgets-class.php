<?php

/**
 * Adds Practice_Contact widget.
 */
class Practice_Contact extends WP_Widget {
/**
	 * Register widget with WordPress.
	 */
	function __construct() {
		parent::__construct(
			 'practice_contact', // Base ID
			esc_html__(  'Practice Contact', 'text_domain' ), // Name
			array( 'description' => esc_html__( 'A contact form widget for practice', 'text_domain' ), ) // Args
		);
	}

	/**
	 * Front-end display of widget.
	 *
	 * @see WP_Widget::widget()
	 *
	 * @param array $args     Widget arguments.
	 * @param array $instance Saved values from database.
	 */
	public function widget( $args, $instance ) {
		echo $args['before_widget'];
		if ( ! empty( $instance['title'] ) ) {
			echo $args['before_title'] . apply_filters( 'widget_title', $instance['title'] ) . $args['after_title'];
		}
		if ( ! empty( $instance['email'] ) ) {
			echo $instance['email'];
		}
		if ( ! empty( $instance['message'] ) ) {
			echo $instance['message'];
		}
		//echo esc_html__( 'Hello, World!', 'text_domain' ); outputs Hello world
		echo $args['after_widget'];
	}

	/**
	 * Back-end widget form.
	 *
	 * @see WP_Widget::form()
	 *
	 * @param array $instance Previously saved values from database.
	 */
	public function form( $instance ) {
		$title = ! empty( $instance['title'] ) ? $instance['title'] : esc_html__( 'Your Name', 'text_domain' );
		$email = ! empty( $instance['email'] ) ? $instance['email'] : esc_html__( 'Your Email', 'email_domain' );
		$message= ! empty( $instance['message'] ) ? $instance['message'] : esc_html__( 'Your Message', 'message_domain' );
		?>
		<p>
		<label for="<?php echo esc_attr( $this->get_field_id( 'title' ) ); ?>"><?php esc_attr_e( 'Name:', 'text_domain' ); ?></label> 
		<input class="widefat" id="<?php echo esc_attr( $this->get_field_id( 'title' ) ); ?>" name="<?php echo esc_attr( $this->get_field_name( 'title' ) ); ?>" type="text" value="<?php echo esc_attr( $title ); ?>">
		</p>

		<p>
		<label for="<?php echo esc_attr( $this->get_field_id( 'email' ) ); ?>"><?php esc_attr_e( 'Email:', 'email_domain' ); ?></label> 
		<input class="widefat" id="<?php echo esc_attr( $this->get_field_id( 'email' ) ); ?>" name="<?php echo esc_attr( $this->get_field_name( 'email' ) ); ?>" type="email" value="<?php echo esc_attr( $email ); ?>">
		</p>

		
		<label for="<?php echo esc_attr( $this->get_field_id( 'message' ) ); ?>"><?php esc_attr_e( 'Message:', 'message_domain' ); ?></label> 
		<textarea rows="4" cols="50" class="widefat" id="<?php echo esc_attr( $this->get_field_id( 'message' ) ); ?>" name="<?php echo esc_attr( $this->get_field_name( 'message' ) ); ?>">
		
		<?php 
	}

	/**
	 * Sanitize widget form values as they are saved.
	 *
	 * @see WP_Widget::update()
	 *
	 * @param array $new_instance Values just sent to be saved.
	 * @param array $old_instance Previously saved values from database.
	 *
	 * @return array Updated safe values to be saved.
	 */
	public function update( $new_instance, $old_instance ) {
		$instance = array();
		$instance['title'] = ( ! empty( $new_instance['title'] ) ) ? sanitize_text_field( $new_instance['title'] ) : '';
		$instance['email'] = ( ! empty( $new_instance['email'] ) ) ? sanitize_text_field( $new_instance['email'] ) : '';
		$instance['message'] = ( ! empty( $new_instance['message'] ) ) ? sanitize_text_field( $new_instance['message'] ) : '';
		return $instance;
	}
	
} // class Practice_Contact

