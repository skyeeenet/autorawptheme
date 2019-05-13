<?php

class FooterTagsWidget extends WP_Widget {


	public function __construct() {
		$widget_ops = array(
			'classname'                   => 'FooterTagsWidget',
			'description'                 => __( 'FooterTagsWidget' ),
			'customize_selective_refresh' => true,
		);
		parent::__construct( 'FooterTagsWidget', 'FooterTagsWidget', $widget_ops );
		$this->alt_option_name = 'FooterTagsWidget';
	}


    public function widget( $args, $instance ) {

        $title = apply_filters( 'widget_title', $instance['title'] );

        $terms = get_terms('slider_types');

        $html = '<div class="widget widget_tags">
                    <h2 class="widget-title margin-bottom-30"><span>'.$title.'</span></h2>
                    <div class="tags-list">';

        foreach($terms as $term) {

            $html = $html . '<a href="#">'. $term->name .'</a>';
        }


        $end =      '</div>
                </div>';

        $html = $html . $end;

        echo $html;
    }

	public function form( $instance ) {
        if ( isset( $instance[ 'title' ] ) ) {
            $title = $instance[ 'title' ];
        }
        else {
            $title = __( 'New title', 'wpb_widget_domain' );
        }
        ?>
         
        <label for="<?php echo $this->get_field_id( 'title' ); ?>"><?php _e( 'Title:' ); ?></label> 
        <input class="widefat" id="<?php echo $this->get_field_id( 'title' ); ?>" name="<?php echo $this->get_field_name( 'title' ); ?>" type="text" value="<?php echo esc_attr( $title ); ?>" />
        
        
        <?php 
        }
             
        // Updating widget replacing old instances with new
        public function update( $new_instance, $old_instance ) {
            $instance = array();
            $instance['title'] = ( ! empty( $new_instance['title'] ) ) ? strip_tags( $new_instance['title'] ) : '';
            return $instance;
        }
}
