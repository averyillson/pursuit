<?php
/**
 * The template for displaying Desktop Navigation
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package pursuit
 */
 ?>

<nav id="site-navigation" class="none block-l main-navigation">
  <?php
    wp_nav_menu( array(
      'menu'            =>            'General',
      'menu_class'      =>            'nav-desktop',
      'menu_id'         =>            '',
      'container'       =>            '',
      'container_class' =>            '',
      'container_id'    =>            ''
    ) );
  ?>
</nav><!-- #site-navigation -->
