
<?php

$num_thumbs = ( is_front_page() ) ? 4 : -1;

 $args = array(
   'post_type' => 'gallery',
   'posts_per_page' => $num_thumbs
 );

 $query = new WP_Query($args);
?>

<div class="row">

  <?php if($query->have_posts()) : while ($query->have_posts()) : $query-> the_post(); ?>

  <div class="media-object">
    <div class="media-object-section">''
      <img class="thumbnail" <?php the_post_thumbnail('medium') ?>>
    </div>
  </div>

<?php endwhile; endif; wp_reset_data(); ?>

</div>
