<?php
/**
 * Template part for displaying page content in page.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package pursuit
 */

?>

<article id="post-<?php the_ID(); ?>" class="single-item">

  <a href="<?php the_permalink(); ?> .entry-content" data-featherlight="ajax">
    <div class="single-thumbnail" style="background-image: url(<?php echo the_post_thumbnail_url(); ?>);"></div>
  </a>

</article><!-- #post-<?php the_ID(); ?> -->
