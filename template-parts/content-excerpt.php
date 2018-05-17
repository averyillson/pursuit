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
	<article id="post-<?php the_ID(); ?>" class="project-item">
    <a href="<?php echo get_the_permalink(); ?>" class="post-link block">
      <div class="col-12 col-4-m col-4-l">
        <img src="<?php the_post_thumbnail_url('thumbnail'); ?>" class="project-image">
      </div>
      <div class="project-info">
				<span class="project-page-number">P. <?php echo the_ID(); ?></span>
        <?php the_title( '<h3 class="project-title">', '</h3>' ); ?>
        <span class="project-excerpt" ><?php the_excerpt(); ?></span>
      </div>
    </a>
	</article><!-- #post- -->
</div>
