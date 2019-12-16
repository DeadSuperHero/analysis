<!-- Note: if you make changes to this file, move it to your current theme's
	directory so this file won't be overwritten when the plugin is upgraded. -->

<!-- Start of Post Wrap -->
<div class="post_embed">
	<!-- This is the output of the post title -->
	<h2 class="entry-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>

	<!-- This is the output of the excerpt -->
	<div class="entry-summary">
    <?php analysis_post_thumbnail(); ?>
		<?php the_excerpt(); ?>
	</div>

	<!-- This is the output of the meta information -->
	<div class="entry-utility">
		<?php if ( count( get_the_category() ) ) : ?>
			<span class="cat-links">
				<?php printf( __( '<span class="%1$s"></span> %2$s', 'twentyten' ), 'entry-utility-prep entry-utility-prep-cat-links', get_the_category_list( ', ' ) ); ?>
			</span>
		<?php endif; ?>
	</div>
</div>
<!-- // End of Post Wrap -->
