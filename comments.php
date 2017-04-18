<?php
  if ( post_password_required() ) {
    return;
  }

  if (have_comments()) { ?>
    <h3><?php comments_number( 'No comments', '1 comment', '% comments' );?></h3>

    <ul>
      <?php wp_list_comments( array( 'type' => 'comment', 'callback' => 'custom_comments' ) );?>


    </ul>

    <?php if(function_exists('wp_comments_corenavi')) wp_comments_corenavi(); } else { ?>

    <h3>There are no comments yet...</h3>
    <p>Be the first to break the ice!</p>

    <?php }

    //Displays comment form

    comment_form(array (
      "title_reply_before" => '<h4 id="reply-title" class="comment-reply-title">',
      "title_reply_after" => "</h4>",
    	'fields' => apply_filters(
    		'comment_form_default_fields', array(
    			'author' => '<label for="author">' . __( 'Your Name' ) . ( $req ? '<span class="required">*</span>' : '' )  .
          '</label></p>' . '<p class="comment-form-author">' . '<input id="author" placeholder="Your Name" name="author" type="text" value="' .
    				esc_attr( $commenter['comment_author'] ) . '" size="30"' . $aria_req . ' />',
    			'email'  => '<label for="email">' . __( 'Your Email' ) .
          ( $req ? '<span class="required">*</span>' : '' ) .
          '</label></p>' . '<p class="comment-form-email">' . '<input id="email" placeholder="your-email@example.com" name="email" type="text" value="' . esc_attr(  $commenter['comment_author_email'] ) .
    				'" size="30"' . $aria_req . ' />',
    			'url'    => '<label for="url">' . __( 'Website', 'domainreference' ) . '</label></p>' . '<p class="comment-form-url">' .
    			 '<input id="url" name="url" placeholder="http://your-site.com" type="text" value="' . esc_attr( $commenter['comment_author_url'] ) . '" size="30" /> '
    		)
    	),
    	'comment_field' => '<p class="comment-form-comment">' .
    		'<label for="comment">' . __( 'Let us know what you have to say:' ) . '</label>' .
    		'<textarea id="comment" name="comment" placeholder="Click here and start writing an awesome comment!" cols="45" rows="8" aria-required="true"></textarea>' .
    		'</p>',
        //'comment_notes_after' => '',
        //'title_reply' => '<div class="crunchify-text"> <h5>Please Post Your Comments & Reviews</h5></div>'
  ));
?>
