<!doctype html>
  <html class="no-js" lang="en">
    <head>
      <meta charset="utf-8"/>
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
      <title> <?php wp_title(); ?> </title>

      <?php wp_head(); ?>

    </head>

    <body <? body_class()?> >
      <header class="top-bar">

        <div class="top-bar-left">
          <ul class="menu">
            <li class="menu-text"> <?php wp_title(); ?> </li>
          </ul>
        </div>

       <?php

          $defaults2 = array(
            'container' => false,
            'theme_location' => 'primary-menu',
            'menu_class' => 'menu-centered'
          );

          wp_nav_menu($defaults2);

        ?>
        <!--
        <div class="menu-centered">
          <ul class="menu">
            <li><a href="#">Three</a></li>
            <li><a href="#">Four</a></li>
            <li><a href="#">Five</a></li>
            <li><a href="#">Six</a></li>
          </ul>
        </div>
        -->

      </header>
