<?php

class FooterInfoWidget extends WP_Widget {


	public function __construct() {
		$widget_ops = array(
			'classname'                   => 'FooterInfosWidget',
			'description'                 => __( 'FooterInfosWidget' ),
			'customize_selective_refresh' => true,
		);
		parent::__construct( 'FooterInfosWidget', 'FooterInfosWidget', $widget_ops );
		$this->alt_option_name = 'FooterInfosWidget';
	}


    public function widget( $args, $instance ) {

        $title = apply_filters( 'widget_title', $instance['title'] );
        $place = apply_filters( 'widget_place', $instance['place'] );
        $phone = apply_filters( 'widget_phone', $instance['phone'] );
        $email = apply_filters( 'widget_email', $instance['email'] );


        $html = '
        <p class="margin-bottom-15">'.$title.'</p>
        <ul>';

        if ($place != null) {
        
            $html .= '<li>
                        <div class="inner">
                            <span class="fa fa-map-marker"></span>
                            <span class="text">'.$place.'</span>
                        </div>
                    </li>';
        }

        if ($phone != null) {
        
            $html .= '<li>
                        <div class="inner">
                            <span class="fa fa fa-phone"></span>
                            <span class="text">'.$phone.'</span>
                        </div>
                    </li>';
        }

        if ($email != null) {
        
            $html .= '<li class="margin-top-7">
                        <div class="inner">
                            <span class="font-size-14 fa fa-envelope"></span>
                            <span class="text">'.$email.'</span>
                        </div>
                    </li>';
        }

        $end = '</ul>';

        echo $html . $end;
    }

	public function form( $instance ) {

        if ( isset( $instance[ 'title' ] ) ) {
            $title = $instance[ 'title' ];
        }
        else {
            $title = __( 'New title', 'wpb_widget_domain' );
        }
        
        if ( isset( $instance[ 'place' ] ) ) {
            $place = $instance[ 'place' ];
        }
        else {
            $place = __( 'New place', 'wpb_widget_domain' );
        }
        
        if ( isset( $instance[ 'phone' ] ) ) {
            $phone = $instance[ 'phone' ];
        }
        else {
            $phone = __( 'New phone', 'wpb_widget_domain' );
        }
        
        if ( isset( $instance[ 'email' ] ) ) {
            $email = $instance[ 'email' ];
        }
        else {
            $email = __( 'New email', 'wpb_widget_domain' );
        }

        ?>
         
        <label for="<?php echo $this->get_field_id( 'title' ); ?>"><?php _e( 'Title:' ); ?></label> 
        <input class="widefat" id="<?php echo $this->get_field_id( 'title' ); ?>" name="<?php echo $this->get_field_name( 'title' ); ?>" type="text" value="<?php echo esc_attr( $title ); ?>" />

        <label for="<?php echo $this->get_field_id( 'place' ); ?>"><?php _e( 'Place:' ); ?></label> 
        <input class="widefat" id="<?php echo $this->get_field_id( 'place' ); ?>" name="<?php echo $this->get_field_name( 'place' ); ?>" type="text" value="<?php echo esc_attr( $place ); ?>" />

        <label for="<?php echo $this->get_field_id( 'phone' ); ?>"><?php _e( 'Phone:' ); ?></label> 
        <input class="widefat" id="<?php echo $this->get_field_id( 'phone' ); ?>" name="<?php echo $this->get_field_name( 'phone' ); ?>" type="text" value="<?php echo esc_attr( $phone ); ?>" />

        <label for="<?php echo $this->get_field_id( 'email' ); ?>"><?php _e( 'Email:' ); ?></label> 
        <input class="widefat" id="<?php echo $this->get_field_id( 'email' ); ?>" name="<?php echo $this->get_field_name( 'email' ); ?>" type="text" value="<?php echo esc_attr( $email ); ?>" />
        
        <?php 
        }
             
        // Updating widget replacing old instances with new
        public function update( $new_instance, $old_instance ) {
            $instance = array();
            $instance['title'] = ( ! empty( $new_instance['title'] ) ) ? strip_tags( $new_instance['title'] ) : '';
            $instance['place'] = ( ! empty( $new_instance['place'] ) ) ? strip_tags( $new_instance['place'] ) : '';
            $instance['phone'] = ( ! empty( $new_instance['phone'] ) ) ? strip_tags( $new_instance['phone'] ) : '';
            $instance['email'] = ( ! empty( $new_instance['email'] ) ) ? strip_tags( $new_instance['email'] ) : '';
            return $instance;
        }
}
