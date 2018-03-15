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
  <ul id="accordion">
    <li>
      <div class="accordion-menu">
        Projects
      </div>
      <?php
        wp_nav_menu( array(
          'menu'            =>            'Projects',
          'menu_class'      =>            '',
          'menu_id'         =>            'submenu',
          'container'       =>            '',
          'container_class' =>            '',
          'container_id'    =>            ''
        ) );
      ?>
    </li>
  </ul>
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
