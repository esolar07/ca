<?php
  /*
    Template Name: Gallery Page
  */
 ?>

<?php get_header(); ?>

<div class="row column text-center">

  <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

    <h2>Our Newest Products</h2>

  <?php endwhile; endif; ?>

  <hr>
</div>
<?php
 $args = array(
   'post_type' => 'gallery',
 );

 $query = new WP_Query($args);
?>

<div class="row">

  <?php if($query->have_posts()) : while ($query->have_posts()) : $query-> the_post(); ?>

  <div class="media-object">
    <div class="media-object-section">''
      <img class="thumbnail" <?php the_post_thumbnail('medium') ?>>
    </div>
    <div class="media-object-section">
      <h5>Nunc Eu Ullamcorper Orci</h5>
      <p>Quisque eget odio ac lectus vestibulum faucibus eget in metus. In pellentesque.</p>
    </div>
  </div>

<?php endwhile; endif; wp_reset_data(); ?>

</div>

<?php get_footer(); ?>
