<?php
if ( post_password_required() ) {
	return;
}
?>

<div id="comments" class="comments-area">

	<?php
	// You can start editing here -- including this comment!
	if ( have_comments() ) :
		?>
		<h2 class="comments-title">
			<?php
			$skyetheme_comment_count = get_comments_number();
			if ( '1' === $skyetheme_comment_count ) {
				printf(
					/* translators: 1: title. */
					esc_html__( 'One thought on &ldquo;%1$s&rdquo;', 'skyetheme' ),
					'<span>' . get_the_title() . '</span>'
				);
			} else {
				printf( // WPCS: XSS OK.
					/* translators: 1: comment count number, 2: title. */
					esc_html( _nx( '%1$s thought on &ldquo;%2$s&rdquo;', '%1$s thoughts on &ldquo;%2$s&rdquo;', $skyetheme_comment_count, 'comments title', 'skyetheme' ) ),
					number_format_i18n( $skyetheme_comment_count ),
					'<span>' . get_the_title() . '</span>'
				);
			}
			?>
		</h2><!-- .comments-title -->

		<?php the_comments_navigation(); ?>

		<ol class="comment-list">
			<?php
			wp_list_comments( array(
				'style'      => 'ol',
				'short_ping' => true,
			) );
			?>
		</ol><!-- .comment-list -->

		<?php
		the_comments_navigation();

		// If comments are closed and there are comments, let's leave a little note, shall we?
		if ( ! comments_open() ) :
			?>
			<p class="no-comments"><?php esc_html_e( 'Comments are closed.', 'skyetheme' ); ?></p>
			<?php
		endif;

	endif; // Check for have_comments().

	$args = array(
		'fields' => array(
			'author' => '<fieldset class="name-wrap">
			<input type="text" id="author" class="tb-my-input" name="author" tabindex="1" placeholder="Name*" value="" size="32" aria-required="true">
		</fieldset>',
			'email' => '<fieldset class="email-wrap">
			<input type="email" id="email" class="tb-my-input" name="email" tabindex="2" placeholder="Email*" value="" size="32" aria-required="true">
		</fieldset>',
		),
		'comment_field' => '<fieldset class="message-wrap">
		<textarea id="comment-message" name="comment" rows="8" tabindex="4" placeholder="Message*" aria-required="true"></textarea>
	</fieldset>'
	 
	);

	add_filter('comment_form_fields', 'kama_reorder_comment_fields' );
	function kama_reorder_comment_fields( $fields ){
		// die(print_r( $fields )); // посмотрим какие поля есть
	
		$new_fields = array(); // сюда соберем поля в новом порядке
	
		$myorder = array('author','email', 'comment'); // нужный порядок
	
		foreach( $myorder as $key ){
			$new_fields[ $key ] = $fields[ $key ];
			unset( $fields[ $key ] );
		}

		if (!is_user_logged_in()) {

			array_unshift($new_fields, '<div class="text-wrap clearfix">');

			$last_item = array_pop($new_fields);
	
			$new_fields[] = '</div>';
	
			$new_fields[] = $last_item;
		}

		// если остались еще какие-то поля добавим их в конец
		if( $fields )
			foreach( $fields as $key => $val )
				$new_fields[ $key ] = $val;
	
		return $new_fields;
	}

	comment_form($args);
	?>

</div><!-- #comments -->
