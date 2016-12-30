<?php
  /*
    Template Name: Front Page
  */
 ?>

<?php get_header(); ?>

<div class="orbit" role="region" aria-label="Favorite Space Pictures" data-orbit>
  <ul class="orbit-container">
    <button class="orbit-previous" aria-label="previous"><span class="show-for-sr">Previous Slide</span>&#9664;</button>
    <button class="orbit-next" aria-label="next"><span class="show-for-sr">Next Slide</span>&#9654;</button>
    <li class="orbit-slide is-active">
      <img class="orbit-image" src="http://placehold.it/2000x750&text=1st">
    </li>
    <li class="orbit-slide">
      <img class="orbit-image" src="http://placehold.it/2000x750&text=2nd">
    </li>
    <li class="orbit-slide">
      <img class="orbit-image" src="http://placehold.it/2000x750&text=3nd">
    </li>
    <li class="orbit-slide">
      <img class="orbit-image" src="http://placehold.it/2000x750&text=4nd">
    </li>
  </ul>
</div>

<div class="row column text-center">

  <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

    <h2>Our Newest Products</h2>

<?php endwhile; endif; ?>y

  <hr>
</div>

<?php get_template_part('content', 'gallery'); ?>

<?php get_footer(); ?>
