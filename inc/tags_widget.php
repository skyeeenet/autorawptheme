<?php

class TagsWidget extends WP_Widget {


	public function __construct() {
		$widget_ops = array(
			'classname'                   => 'TagsWidget',
			'description'                 => __( 'TagsWidget' ),
			'customize_selective_refresh' => true,
		);
		parent::__construct( 'TagsWidget', 'TagsWidget', $widget_ops );
		$this->alt_option_name = 'TagsWidget';
	}


    public function widget( $args, $instance ) {

        $title = apply_filters( 'widget_title', $instance['title'] );
        $taxonomy = apply_filters( 'widget_title', $instance['taxonomy'] );

        $terms = get_terms($taxonomy);

        $html = '<div class="widget widget_tags margin-top-55">
                    <h2 class="widget-title"><span>'.$title.'</span></h2>
                    <div class="tags-list">';

        foreach($terms as $term) {
            
            $html = $html . '<a href="'. get_term_link((int)$term->term_id) .'">'. $term->name .'</a>';
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

        if ( isset( $instance[ 'taxonomy' ] ) ) {
            $taxonomy = $instance[ 'taxonomy' ];
        }
        else {
            $taxonomy = __( 'New Post Type', 'wpb_widget_domain' );
        }
        ?>
         
        <label for="<?php echo $this->get_field_id( 'title' ); ?>"><?php _e( 'Title:' ); ?></label> 
        <input class="widefat" id="<?php echo $this->get_field_id( 'title' ); ?>" name="<?php echo $this->get_field_name( 'title' ); ?>" type="text" value="<?php echo esc_attr( $title ); ?>" />

        <label for="<?php echo $this->get_field_id( 'taxonomy' ); ?>"><?php _e( 'Taxonomy:' ); ?></label> 
        <input class="widefat" id="<?php echo $this->get_field_id( 'taxonomy' ); ?>" name="<?php echo $this->get_field_name( 'taxonomy' ); ?>" type="text" value="<?php echo esc_attr( $taxonomy ); ?>" />
        
        
        <?php 
        }
             
        // Updating widget replacing old instances with new
        public function update( $new_instance, $old_instance ) {
            $instance = array();
            $instance['title'] = ( ! empty( $new_instance['title'] ) ) ? strip_tags( $new_instance['title'] ) : '';
            $instance['taxonomy'] = ( ! empty( $new_instance['taxonomy'] ) ) ? strip_tags( $new_instance['taxonomy'] ) : '';
            return $instance;
        }
}
