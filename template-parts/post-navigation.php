<?php
/**
 * Template part for displaying post navigation in single.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package pursuit
 */

?>
<div class="col-12">
  <section class="post-navigation">
    <?php the_post_navigation( array( 'in_same_term' => 'true' ) ); ?>
  </section>
</div>
