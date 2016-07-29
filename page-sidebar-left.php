<?
/*
  Template Name: Left Sidebar
*/
?>

<?php get_header(); ?>

<div class="row column text-center">

  <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

    <h2>Our Newest Products</h2>

  <?php endwhile; else : ?>

    <p> <?php php_e("Sorry, no pages found."); ?> </p>

  <?php endif; ?>

  <hr>
</div>

<?php get_footer(); ?>
