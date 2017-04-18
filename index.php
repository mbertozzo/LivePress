<?php get_header(); ?>

  <div class="hero-title">
    <?php dynamic_sidebar("Header"); ?>
  </div>

  <div class="cat-wrapper">
    <h4>What are you interested in?</h4>
    <ul>
      <?php
        $args = array ('hide_empty' => 0, 'title_li' => '');
        wp_list_categories($args);
      ?>
    </ul>

  </div><!-- /.cat-wrapper -->
  </div><!-- /.container-fluid hero -->

  <div class="container posts">
    <div class="row"><!-- WP Loop -->
      <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
        <div class="col-xs-6 col-sm-3 col-md-2">
          <a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>">
            <?php the_post_thumbnail('thumbnail'); ?>
          </a>
          <h4><label><?php the_time('d . m . y'); ?></label><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a><span>written by <?php the_author_posts_link(); ?></span></h4>
        </div>
      <?php endwhile; else : ?>
        <div class="col-xs-12 warning">
          <h3>Bummer!</h3>
          <p>We didn't find any post matching your search. Try other keywords or <a href="<?php bloginfo('url'); ?>">click here</a> to get back to Home.</p>
        </div>
      <?php endif; ?><!-- /.WP Loop -->
    </div><!-- /.row -->
  </div><!-- /.container posts -->

  <?php
  //global $wp_query;
  //if($wp_query->max_num_pages > 1){   //checks if there is a "Next Page" link
    //echo '<div class="container posts posts-nav"><p>';  //adds a container if link is defined
    //posts_nav_link();
    //echo '</p></div>';
  //}

  echo '<div class="container posts-nav">';
  if( get_previous_posts_link() ) :
    function posts_link_attributes() { return 'class="btn-left"'; }   //function that returns additional attributes
    add_filter('previous_posts_link_attributes', 'posts_link_attributes');  //attributes are linked to target element
    previous_posts_link( '&#171; Newer Entries' );  //previous posts link -- target element
  endif;
  if( get_next_posts_link() ) :
    function posts_link_attributes() { return 'class="btn-right"'; }
    add_filter('next_posts_link_attributes', 'posts_link_attributes');
    next_posts_link( 'Older Entries &#187;', 0 );
  endif;
  echo '</div>';
  ?>

  <?php $lptheme_options=theme_data_setup();
	  $current_options = wp_parse_args(  get_option( 'lptheme_options', array() ), $lptheme_options );
	  if($current_options['footer_stripe_enabled'] == true) { ?>

  <div class="container-fluid instagram">
    <div class="row no-gutters">

      <?php if($current_options['stripe_image_one']) { ?>
			<div class="col-xs-6 col-sm-3 col-md-2 box">
			  <a href="<?php echo esc_url($current_options['stripe_image_one']); ?>"><img src="<?php echo esc_url($current_options['stripe_image_one']); ?>" alt=""><div class="overlay"><img src="<?php bloginfo('template_url') ?>/img/add.svg"></div></a>
      </div>
			<?php } ?>
      <?php if($current_options['stripe_image_two']) { ?>
			<div class="col-xs-6 col-sm-3 col-md-2 box">
			  <a href="<?php echo esc_url($current_options['stripe_image_two']); ?>"><img src="<?php echo esc_url($current_options['stripe_image_two']); ?>" alt=""><div class="overlay"><img src="<?php bloginfo('template_url') ?>/img/add.svg"></div></a>
      </div>
			<?php } ?>
      <?php if($current_options['stripe_image_three']) { ?>
      <div class="col-xs-6 col-sm-3 col-md-2 hidden-xs box">
        <a href="<?php echo esc_url($current_options['stripe_image_three']); ?>"><img src="<?php echo esc_url($current_options['stripe_image_three']); ?>" alt=""><div class="overlay"><img src="<?php bloginfo('template_url') ?>/img/add.svg"></div></a>
      </div>
      <?php } ?>
      <?php if($current_options['stripe_image_four']) { ?>
      <div class="col-xs-6 col-sm-3 col-md-2 hidden-xs box">
        <a href="<?php echo esc_url($current_options['stripe_image_four']); ?>"><img src="<?php echo esc_url($current_options['stripe_image_four']); ?>" alt=""><div class="overlay"><img src="<?php bloginfo('template_url') ?>/img/add.svg"></div></a>
      </div>
      <?php } ?>
      <?php if($current_options['stripe_image_five']) { ?>
      <div class="col-xs-6 col-sm-3 col-md-2 hidden-sm hidden-xs box">
        <a href="<?php echo esc_url($current_options['stripe_image_five']); ?>"><img src="<?php echo esc_url($current_options['stripe_image_five']); ?>" alt=""><div class="overlay"><img src="<?php bloginfo('template_url') ?>/img/add.svg"></div></a>
      </div>
      <?php } ?>
      <?php if($current_options['stripe_image_six']) { ?>
      <div class="col-xs-6 col-sm-3 col-md-2 hidden-sm hidden-xs box">
        <a href="<?php echo esc_url($current_options['stripe_image_six']); ?>"><img src="<?php echo esc_url($current_options['stripe_image_six']); ?>" alt=""><div class="overlay"><img src="<?php bloginfo('template_url') ?>/img/add.svg"></div></a>
      </div>
      <?php } ?>


      <!--<div class="col-xs-6 col-sm-3 col-md-2 box"><img src="<?php bloginfo('template_url'); ?>/img/post/red.jpeg" alt=""><a href="#"><div class="overlay"><img src="<?php bloginfo('template_url') ?>/img/add.svg"></div></a></div>
      <div class="col-xs-6 col-sm-3 col-md-2 box"><img src="<?php bloginfo('template_url'); ?>/img/post/red_b.jpg" alt=""><a href="#"><div class="overlay"><img src="<?php bloginfo('template_url') ?>/img/add.svg"></div></a></div>
      <div class="col-xs-6 col-sm-3 col-md-2 hidden-xs box"><img src="<?php bloginfo('template_url'); ?>/img/post/red_c.jpg" alt=""><a href="#"><div class="overlay"><img src="<?php bloginfo('template_url') ?>/img/add.svg"></div></a></div>
      <div class="col-xs-6 col-sm-3 col-md-2 hidden-xs box"><img src="<?php bloginfo('template_url'); ?>/img/post/red_d.jpg" alt=""><a href="#"><div class="overlay"><img src="<?php bloginfo('template_url') ?>/img/add.svg"></div></a></div>
      <div class="col-xs-6 col-sm-3 col-md-2 hidden-sm hidden-xs box"><img src="<?php bloginfo('template_url'); ?>/img/post/red_e.jpg" alt=""><a href="#"><div class="overlay"><img src="<?php bloginfo('template_url') ?>/img/add.svg"></div></a></div>
      <div class="col-xs-6 col-sm-3 col-md-2 hidden-sm hidden-xs box"><img src="<?php bloginfo('template_url'); ?>/img/post/red_f.jpg" alt=""><a href="#"><div class="overlay"><img src="<?php bloginfo('template_url') ?>/img/add.svg"></div></a></div>
    </div>-->
  </div><!-- /.container-fluid instagram -->
  <?php } ?>
<?php get_footer(); ?>
