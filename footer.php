<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package pursuit
 */

?>

					<footer id="colophon" class="site-footer">
						<div class="site-info">
							<a href="<?php echo esc_url( __( 'https://wordpress.org/', 'pursuit' ) ); ?>"><?php
								/* translators: %s: CMS name, i.e. WordPress. */
								printf( esc_html__( 'Proudly powered by %s', 'pursuit' ), 'WordPress' );
							?></a>
							<span class="sep"> | </span>
							<?php
								/* translators: 1: Theme name, 2: Theme author. */
								printf( esc_html__( 'Theme: %1$s by %2$s.', 'pursuit' ), 'pursuit', '<a href="http://www.instagram.com/averyillson">Avery Illson</a>' );
							?>
						</div><!-- .site-info -->
					</footer><!-- #colophon -->
				</div><!-- #content -->
			</div><!-- #page -->
	</div>
</div>
<?php wp_footer(); ?>

</body>
</html>