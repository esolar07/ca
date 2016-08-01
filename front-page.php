<?php get_header(); ?>

<div class="row column text-center">

  <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

    <h2>Our Newest Products</h2>

  <?php endwhile; endif; ?>

  <hr>
</div>

<?php get_footer(); ?>
