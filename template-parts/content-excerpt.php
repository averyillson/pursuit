<?php
/**
 * Template part for displaying page content in page.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package pursuit
 */

?>

<div class="col-12">
	<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <a href="<?php echo get_the_permalink(); ?>" class="post-link block">
      <div class="col-12 col-4-m col-4-l">
        <img src="<?php the_post_thumbnail_url('thumbnail'); ?>" alt="" class="img-fluid img-round block center">
      </div>
      <div class="col-12 col-8-m col-8-l">
        <div class="col-12 col-4-l">
					<span class="post-page">P. <?php echo the_ID(); ?></span>
        </div>
        <div class="col-12 col-8-l">
          <?php the_title( '<h3 class="post-title">', '</h3>' ); ?>
        </div>
        <div class="col-12">
          <span class="post-excerpt" ><?php the_excerpt(); ?></span>
        </div>
      </div>
    </a>
	</article><!-- #post- -->
</div>
