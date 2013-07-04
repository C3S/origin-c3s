<?php 
	
$cat = get_theme_mod( 'fcs_gravatar-category' );

if ($cat && in_category($cat)) : ?>

	<div class="author_avatar">
		<a href="<?php echo get_the_author_link(); ?>" title="Beiträge, die als 'Meine Meinung' gekennzeichnet sind, spiegeln nur die Meinungen der jeweiligen Autoren wieder und sind keine offiziellen Statemenst der C3S">
			<?php $user_email = get_the_author_meta('user_email'); 
			echo get_avatar( $user_email,60); ?>
			<span class="byline">Meine Meinung</span>
		</a>
	</div>

<?php endif; ?>
