<?php
/* Set textarea in comment form as last item */
function mb_move_comment_form_below( $fields ) {
    $comment_field = $fields['comment'];
    unset( $fields['comment'] );
    $fields['comment'] = $comment_field;
    return $fields;
}
add_filter( 'comment_form_fields', 'mb_move_comment_form_below' );

/* --------End-------- */

/* Comments */
function custom_comments ($comment, $args, $depth) {
   $GLOBALS['comment'] = $comment; ?>
   <li <?php comment_class(); ?> id="li-comment-<?php comment_ID() ?>">
     <div id="comment-<?php comment_ID(); ?>">
      <div class="comment-author vcard">
         <?php echo get_avatar($comment,$size='56',$default='<path_to_url>' ); ?>

         <?php printf(__('<cite class="fn">%s</cite>'), get_comment_author_link());?>

      </div>
      <?php if ($comment->comment_approved == '0') : ?>
         <em><?php _e('Your comment is awaiting moderation.') ?></em>
         <br />
      <?php endif; ?>



      <?php comment_text() ?>

      <div class="comment-footer">

        <a class="comment-date" href="<?php echo htmlspecialchars( get_comment_link( $comment->comment_ID ) ) ?>"><?php printf(__('%1$s at %2$s'), get_comment_date(),  get_comment_time()) ?></a>
        <?php edit_comment_link(__('Edit'),'  ','') ?>
        <?php comment_reply_link(array_merge( $args, array('depth' => $depth, 'max_depth' => $args['max_depth']))) ?>

      </div>
     </div>
<?php }

//inspired by http://dimox.net/wordpress-comments-pagination-without-a-plugin/
function wp_comments_corenavi() {
   $pages = '';
   $max = get_comment_pages_count();
   $page = get_query_var('cpage');
   if (!$page) $page = 1;
   $a['current'] = $page;
   $a['echo'] = false;

   $total = 0; //1 - display the text "Page N of N", 0 - not display
   $a['mid_size'] = 3; //how many links to show on the left and right of the current
   $a['end_size'] = 1; //how many links to show in the beginning and end
   $a['prev_text'] = '&laquo; Previous'; //text of the "Previous page" link
   $a['next_text'] = 'Next &raquo;'; //text of the "Next page" link

   if ($max > 1) echo '<div class="commentNavigation">';
   if ($total == 1 && $max > 1) $pages = '<span class="pages">Page ' . $page . ' of ' . $max . '</span>'."\r\n";
   echo $pages . paginate_comments_links($a);
   if ($max > 1) echo '</div>';
}
?>
