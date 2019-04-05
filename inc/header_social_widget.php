<?php

class Widget_Social extends WP_Widget {


	public function __construct() {
		$widget_ops = array(
			'classname'                   => 'Widget_Social',
			'description'                 => __( 'Social Widget' ),
			'customize_selective_refresh' => true,
		);
		parent::__construct( 'widget_social', 'Social Widget', $widget_ops );
		$this->alt_option_name = 'widget_social';
	}


    public function widget( $args, $instance ) {
        $icon = apply_filters( 'widget_icon', $instance['icon'] );
        $url = apply_filters( 'widget_url', $instance['url'] );
         

        if (!empty($icon) && !empty($url))
            echo '<a href="'.$url.'"><i class="'.$icon.'"></i></a>';
    }

	public function form( $instance ) {
        if ( isset( $instance[ 'icon' ] ) ) {
        $icon = $instance[ 'icon' ];
        }
        else {
        $icon = __( 'fa fa-facebook', 'wpb_widget_domain' );
        }

        if ( isset( $instance[ 'url' ] ) ) {
            $url = $instance[ 'url' ];
        }
        else {
            $url = __( '#', 'wpb_widget_domain' );
        }
        ?>
         
        <label for="<?php echo $this->get_field_id( 'icon' ); ?>"><?php _e( 'Icon:' ); ?></label> 
        <input class="widefat" id="<?php echo $this->get_field_id( 'icon' ); ?>" name="<?php echo $this->get_field_name( 'icon' ); ?>" type="text" value="<?php echo esc_attr( $icon ); ?>" />
         
        <label for="<?php echo $this->get_field_id( 'url' ); ?>"><?php _e( 'Url:' ); ?></label> 
        <input class="widefat" id="<?php echo $this->get_field_id( 'url' ); ?>" name="<?php echo $this->get_field_name( 'url' ); ?>" type="text" value="<?php echo esc_attr( $url ); ?>" />

        <?php 
        }
             
        // Updating widget replacing old instances with new
        public function update( $new_instance, $old_instance ) {
        $instance = array();
        $instance['icon'] = ( ! empty( $new_instance['icon'] ) ) ? strip_tags( $new_instance['icon'] ) : '';
        $instance['url'] = ( ! empty( $new_instance['url'] ) ) ? strip_tags( $new_instance['url'] ) : '';
        return $instance;
        }
}
