<!doctype html>
  <html class="no-js" lang="en">
    <head>
      <meta charset="utf-8"/>
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
      <title> <?php wp_title(); ?> </title>

      <?php wp_head(); ?>

    </head>

    <body>
      <header class="top-bar">

        <?
          $defaults = array(
            'container' => false,
            'theme_location' => 'primary-menu',
            'menu_class' => 'top-bar-left'
          )

          wp_nav_menu($defaults);
        ?>

        <!--
        <div class="top-bar-left">
          <ul class="menu">
            <li class="menu-text"> <?php bloginfo('name'); ?> </li>
            <li><a href="#">One</a></li>
            <li><a href="#">Two</a></li>
          </ul>
        </div>
        -->

        <?
          $defaults = array(
            'container' => false,
            'theme_location' => 'secondary-menu',
            'menu_class' => 'top-bar-right'
          )

          wp_nav_menu($defaults);
        ?>
        <!--
        <div class="top-bar-right">
          <ul class="menu">
            <li><a href="#">Three</a></li>
            <li><a href="#">Four</a></li>
            <li><a href="#">Five</a></li>
            <li><a href="#">Six</a></li>
          </ul>
        </div>
        -->

      </header>
