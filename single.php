<?php
  /*
    Template Name: Home Page
  */
 ?>

<?php get_header(); ?>

<div class="callout large primary">
  <div class="row column text-center">
    <h1>Our Blog</h1>
  </div>
</div>


    <div class="row" id="content">
      <div class="medium-8 columns">

        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>


        <div class="blog-post">
          <h3>
            <a <?php the_permalink(); ?> > <?php the_title(); ?> </a> <small> <?php the_time('F j, Y'); ?> at <?php the_time('g:i a'); ?> </small>
          </h3>

          <?php
            // Must be inside a loop.

            if ( has_post_thumbnail() ) {
                 the_post_thumbnail('large');
            } else {
              echo '<img class="thumbnail" src="http://placehold.it/850x350">';
            }

          ?>

          <p> <?php the_content(); ?> </p>

          <div class="callout">
            <ul class="menu simple">
              <li> <?php echo get_avatar('ID', 24); ?> </li>
              <li><a href="#">Author: <?php the_author_posts_link(); ?> </a></li>
              <li><a href="#">Comments: 3</a></li>
            </ul>
          </div>
        </div>

        <?php the_content(); ?>

        <?php comments_template; ?>

      <?php endwhile; else: ?>

          <p> <?php _e( 'Sorry, no posts matched your criteria.' ); ?> </p>

       <?php endif; ?>

      </div>
    </div>

<?php get_footer(); ?>