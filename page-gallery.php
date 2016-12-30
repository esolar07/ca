<?php
  /*
    Template Name: Gallery Page
  */
 ?>

<?php get_header(); ?>

<div class="row column text-center">

  <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

    <h2>Gallery</h2>

  <?php endwhile; endif; ?>

  <hr>
</div>

<?php get_template_part('content', 'gallery'); ?>

<?php get_footer(); ?>
