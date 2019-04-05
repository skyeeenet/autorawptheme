<?php

class Widget_Header extends WP_Widget {


	public function __construct() {
		$widget_ops = array(
			'classname'                   => 'Widget_Header',
			'description'                 => __( 'Header Widget' ),
			'customize_selective_refresh' => true,
		);
		parent::__construct( 'widget_header', 'Header Widget', $widget_ops );
		$this->alt_option_name = 'widget_header';
	}


    public function widget( $args, $instance ) {
        $address = apply_filters( 'widget_address', $instance['address'] );
        $phone = apply_filters( 'widget_phone', $instance['phone'] );
        $time = apply_filters( 'widget_time', $instance['time'] );
         

        if (! empty($address))
            echo '<span class="address content">'.$address.'</span>';
        if (! empty($phone))
            echo '<span class="phone content">'.$phone.'</span>';
        if (!empty($time))
            echo '<span class="time content">'.$time.'</span>';

    }

	public function form( $instance ) {
        if ( isset( $instance[ 'address' ] ) ) {
        $address = $instance[ 'address' ];
        }
        else {
        $address = __( 'New address', 'wpb_widget_domain' );
        }

        if ( isset( $instance[ 'phone' ] ) ) {
            $phone = $instance[ 'phone' ];
        }
        else {
            $phone = __( 'New phone', 'wpb_widget_domain' );
        }

        if ( isset( $instance[ 'time' ] ) ) {
            $time = $instance[ 'time' ];
        }
        else {
            $time = __( 'New time', 'wpb_widget_domain' );
        }
        // Widget admin form
        ?>
         
         
        <label for="<?php echo $this->get_field_id( 'address' ); ?>"><?php _e( 'Address:' ); ?></label> 
        <input class="widefat" id="<?php echo $this->get_field_id( 'address' ); ?>" name="<?php echo $this->get_field_name( 'address' ); ?>" type="text" value="<?php echo esc_attr( $address ); ?>" />
         
        <label for="<?php echo $this->get_field_id( 'phone' ); ?>"><?php _e( 'Phone:' ); ?></label> 
        <input class="widefat" id="<?php echo $this->get_field_id( 'phone' ); ?>" name="<?php echo $this->get_field_name( 'phone' ); ?>" type="text" value="<?php echo esc_attr( $phone ); ?>" />

        <label for="<?php echo $this->get_field_id( 'time' ); ?>"><?php _e( 'Time:' ); ?></label> 
        <input class="widefat" id="<?php echo $this->get_field_id( 'time' ); ?>" name="<?php echo $this->get_field_name( 'time' ); ?>" type="text" value="<?php echo esc_attr( $time ); ?>" />
        <?php 
        }
             
        // Updating widget replacing old instances with new
        public function update( $new_instance, $old_instance ) {
        $instance = array();
        $instance['address'] = ( ! empty( $new_instance['address'] ) ) ? strip_tags( $new_instance['address'] ) : '';
        $instance['phone'] = ( ! empty( $new_instance['phone'] ) ) ? strip_tags( $new_instance['phone'] ) : '';
        $instance['time'] = ( ! empty( $new_instance['time'] ) ) ? strip_tags( $new_instance['time'] ) : '';
        return $instance;
        }
}
