<?php
/**
 * Archive Template
 *
 * The archive template is the default template used for archives pages without a more specific template. 
 *
 * @package Origin
 * @subpackage Template
 */

get_header(); // Loads the header.php template. ?>

	<?php do_atomic( 'before_content' ); // origin_before_content ?>

	<div id="content">

		<?php do_atomic( 'open_content' ); // origin_open_content ?>

		<div class="hfeed">

			<?php if ( have_posts() ) : ?>

				<?php while ( have_posts() ) : the_post(); ?>

					<?php do_atomic( 'before_entry' ); // origin_before_entry ?>

					<div id="post-<?php the_ID(); ?>" class="<?php hybrid_entry_class(); ?>">		

						<?php do_atomic( 'open_entry' ); // origin_open_entry ?>

						<?php if ( current_theme_supports( 'get-the-image' ) ) get_the_image( array( 'meta_key' => 'Thumbnail', 'size' => 'thumbnail', 'attachment' => true ) ); ?>

						<?php get_template_part('C3S','Meinung'); ?>
						
						<?php echo apply_atomic_shortcode( 'entry_title', '[entry-title]' ); ?>

						<?php echo apply_atomic_shortcode( 'byline', '<div class="byline">' . __( '[entry-published] &middot; by [entry-author] &middot; in [entry-terms taxonomy="category" before=""] [entry-edit-link before=" &middot; "]', 'origin-c3s' ) . '</div>' ); ?>
						

						<div class="entry-summary">
							
							<?php the_excerpt(); ?>
							
							<?php wp_link_pages( array( 'before' => '<p class="page-links">' . __( 'Pages:', 'origin-c3s' ), 'after' => '</p>' ) ); ?>
							
						</div><!-- .entry-summary -->

						<?php do_atomic( 'close_entry' ); // origin_close_entry ?>

					</div><!-- .hentry -->

					<?php do_atomic( 'after_entry' ); // origin_after_entry ?>

				<?php endwhile; ?>

			<?php else : ?>

				<?php get_template_part( 'loop-error' ); // Loads the loop-error.php template. ?>

			<?php endif; ?>

		</div><!-- .hfeed -->

		<?php do_atomic( 'close_content' ); // origin_close_content ?>

		<?php get_template_part( 'loop-nav' ); // Loads the loop-nav.php template. ?>

	</div><!-- #content -->

	<?php do_atomic( 'after_content' ); // origin_after_content ?>

<?php get_footer(); // Loads the footer.php template. ?>