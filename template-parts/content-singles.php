<?php
/**
 * Template part for displaying page content in page.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package pursuit
 */

?>

<div class="col-12 col-6-m col-4-l">
	<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

    <a href="<?php the_permalink(); ?> .entry-content" data-featherlight="ajax">
      <?php the_post_thumbnail( 'medium' ); ?>
    </a>

	</article><!-- #post-<?php the_ID(); ?> -->
</div>
