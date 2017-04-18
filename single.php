<?php get_header(); ?>

  </div><!-- /.container-fluid hero -->


  <div class="container posts">
    <div class="row"><!-- WP Loop -->
      <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
        <div class="col-sm-8">
          <h3><?php the_title(); ?></h3>
        </div>
        <div class="col-sm-8">
          <?php the_content(); ?>
        </div>
        <div class="col-sm-3 col-sm-offset-1">
          <?php the_post_thumbnail('thumb-single', array('class' => 'single-hide')); ?>

          <p class="mt15">witten by <b><?php the_author_posts_link(); ?></b> on <?php the_time('d  F  Y'); ?><br /><?php comments_number( 'nobody left a comment', 'there is <b>one</b> response', 'there are <b>%</b> responses' ); ?></p>
          <p class="posts-nav"><?php the_tags("","",""); ?></p>

        </div>
      <?php endwhile; else : ?>
        <div class="col-xs-12 warning">
          <h3>Bummer!</h3>
          <p>We didn't find any post matching your search. Try other keywords or <a href="<?php bloginfo('url'); ?>">click here</a> to get back to Home.</p>
        </div>
      <?php endif; ?><!-- /.WP Loop -->
    </div><!-- /.row -->
  </div><!-- /.container posts -->

  <div class="container posts-nav spaced">
    <a href="<?php bloginfo('url'); ?>">Back to Home</a>
  </div>

  <div class="container comments">
    <div class="col-sm-8">
      <?php comments_template(); ?>
    </div>
  </div>

  <div class="container-fluid instagram">
    <div class="row no-gutters">
      <div class="col-xs-6 col-sm-3 col-md-2 box"><img src="<?php bloginfo('template_url'); ?>/img/post/red.jpeg" alt=""><a href="#"><div class="overlay"><img src="<?php bloginfo('template_url') ?>/img/add.svg"></div></a></div>
      <div class="col-xs-6 col-sm-3 col-md-2 box"><img src="<?php bloginfo('template_url'); ?>/img/post/red_b.jpg" alt=""><a href="#"><div class="overlay"><img src="<?php bloginfo('template_url') ?>/img/add.svg"></div></a></div>
      <div class="col-xs-6 col-sm-3 col-md-2 hidden-xs box"><img src="<?php bloginfo('template_url'); ?>/img/post/red_c.jpg" alt=""><a href="#"><div class="overlay"><img src="<?php bloginfo('template_url') ?>/img/add.svg"></div></a></div>
      <div class="col-xs-6 col-sm-3 col-md-2 hidden-xs box"><img src="<?php bloginfo('template_url'); ?>/img/post/red_d.jpg" alt=""><a href="#"><div class="overlay"><img src="<?php bloginfo('template_url') ?>/img/add.svg"></div></a></div>
      <div class="col-xs-6 col-sm-3 col-md-2 hidden-sm hidden-xs box"><img src="<?php bloginfo('template_url'); ?>/img/post/red_e.jpg" alt=""><a href="#"><div class="overlay"><img src="<?php bloginfo('template_url') ?>/img/add.svg"></div></a></div>
      <div class="col-xs-6 col-sm-3 col-md-2 hidden-sm hidden-xs box"><img src="<?php bloginfo('template_url'); ?>/img/post/red_f.jpg" alt=""><a href="#"><div class="overlay"><img src="<?php bloginfo('template_url') ?>/img/add.svg"></div></a></div>
    </div><!--  -->
  </div><!-- /.container-fluid instagram -->

<?php get_footer(); ?>
