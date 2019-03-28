<?php
/**
 * Displays the footer widget area
 *
 * @package WordPress
 * @subpackage Twenty_Nineteen
 * @since 1.0.0
 */

if ( is_active_sidebar( 'tw-sidebar' ) ) : ?>

	<aside class="widget-area" role="complementary" aria-label="<?php esc_attr_e( 'Footer', 'twentynineteen' ); ?>">
		<?php
			if (is_active_sidebar('tw-sidebar')) {
				?>
					<div class="widget flex flex-wrap -mx-6">
						<?php dynamic_sidebar('tw-sidebar'); ?>
					</div>
				<?php
			}
		?>
	</aside><!-- .widget-area -->

<?php endif; ?>
