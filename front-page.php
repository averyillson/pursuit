<?php
/**
 * The template for displaying Front Page Template
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package pursuit
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main">
			<div class="container-fluid">

				<section class="nameplate">
					<div class="plate-t">
						<span class="intro">Video & Photo Journalism</span>
					</div>
					<div class="plate-m">
						<span class="plate-l">the</span>
						<span class="plate-c">sarah espedido</span>
						<span class="plate-r">press</span>
					</div>
					<div class="plate-b">
						<span class="edition"><?php echo date('F', strtotime( date('Y-m') . " -1 month" ) ); ?> - <?php echo date('F') . ' ' . date('Y'); ?></span>
					</div>
				</section>

				<div class="col-12 center">
					<section class="featured">
						<div class="clear row">
							<?php
								$featQuery = new WP_Query( array(
									'category_name' => 'projects',
									'posts_per_page'=> 1
								 ) );
								if ( $featQuery->have_posts() ) {
									// The Loop
									while ( $featQuery->have_posts() ) {
										$featQuery->the_post(); ?>
											<a href="<?php echo get_the_permalink(); ?>" class="feat-link">
												<div class="feat-container" style="background-image:url(<?php echo the_post_thumbnail_url(); ?>);">
													<?php the_title('<h2 class="feat-title">','</h2>'); ?>
													<span class="feat-excerpt"><?php the_excerpt(); ?></span>
												</div>
											</a>
									<?php }

									// Restore original Post Data
									wp_reset_postdata();
								}
							?>
						</div>
					</section>
				</div>

				<div class="divider"></div>

				<div class="col-12 center">
					<section class="recent-queue">
						<div class="clear row">
							<?php
								$recentQuery = new WP_Query( array(
									'category_name' => 'singles',
									'posts_per_page'=> 4,

								) );
								if ( $recentQuery->have_posts() ) {
									// The 2nd Loop
									while ( $recentQuery->have_posts() ) {
										$recentQuery->the_post(); ?>
										<div class="col-12 col-4-m col-4-l">
											<a href="<?php the_permalink(); ?>" class="single-link">
												<span class="single-page">P. <?php echo get_the_ID(); ?></span>
												<?php the_title('<h4 class="single-title">','</h4>'); ?>
												<img src="<?php the_post_thumbnail_url(); ?>" alt="" class="img-fluid center">
											</a>
										</div>
									<?php }

									// Restore original Post Data
									wp_reset_postdata();
								}
							?>
						</div>
					</section>
				</div>
			</div>
		</main><!-- #main -->
	</div><!-- #primary -->

<?php

get_footer();
