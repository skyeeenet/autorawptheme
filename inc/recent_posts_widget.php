<?php

class RecentPostsWidget extends WP_Widget {


	public function __construct() {
		$widget_ops = array(
			'classname'                   => 'RecentPostsWidget',
			'description'                 => __( 'RecentPostsWidget' ),
			'customize_selective_refresh' => true,
		);
		parent::__construct( 'RecentPostsWidget', 'RecentPostsWidget', $widget_ops );
		$this->alt_option_name = 'RecentPostsWidget';
	}


    public function widget( $args, $instance ) {

        $title = apply_filters( 'widget_title', $instance['title'] );

        $args = array (
            'numberposts' => '3',
            'post_type' => 'blog'
        );
        $posts = wp_get_recent_posts($args);

        $html = '<div class="widget widget_lastest">
            <h2 class="widget-title"><span>'.$title.'</span></h2>
            <ul class="lastest-posts data-effect clearfix">';
        global $post;
        foreach($posts as $post) {
            $html = $html . '<li class="clearfix">
            <div class="thumb data-effect-item has-effect-icon">
                <img src="'.get_the_post_thumbnail_url($post['ID']).'" alt="Image">
                <div class="overlay-effect bg-color-2"></div>
                <div class="elm-link">
                    <a href="'.get_permalink($post["ID"]).'" class="icon-2"></a>
                </div>
            </div>
            <div class="text">
                <h3><a href="'.get_permalink($post["ID"]).'">'.$post["post_title"].'</a></h3>
                <span class="post-date"><span class="entry-date">'.get_the_time('j F Y').'</span></span>
            </div>
        </li>';

        }


        $end =      '</ul>
        </div><!-- /.widget_lastest -->';

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
