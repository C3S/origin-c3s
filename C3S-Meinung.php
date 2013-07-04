<?php 
	
$cat = get_theme_mod( 'fcs_gravatar-category' );

if ($cat && in_category($cat)) : ?>

	<div class="author_avatar">
		<a href="<?php echo get_the_author_link(); ?>" title="<?php _e('Posts, which are marked as My Opinion reflect the views of the authors and do not necessarily reflect the official view of C3S','origin-c3s') ?>">
			<?php $user_email = get_the_author_meta('user_email');
			echo get_avatar( $user_email,60); ?>
			<span class="byline"><?php _e('My Opinion','origin-c3s') ?></span>
		</a>
	</div>

<?php endif; ?>
