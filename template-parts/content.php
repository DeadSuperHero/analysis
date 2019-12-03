<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package analysis
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<div class="article_insert">
		<header class="entry-header">

				<div class="article-begin">
					<?php analysis_post_thumbnail(); ?>
					<?php
					if ( is_singular() ) :
						the_title( '<h1 class="entry-title">', '</h1>' );
					else :
						the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
					endif;

					if ( 'post' === get_post_type() ) :
						?>
						<div class="entry-meta">
							<?php
							analysis_posted_on();
							?>

							<span class="category-list">
								<?php analysis_category_list(); ?>
							</span>
						</div><!-- .entry-meta -->
				</div>

			<?php endif; ?>
		</header><!-- .entry-header -->

		<div class="entry-content">
			<?php
			the_content( sprintf(
				wp_kses(
					/* translators: %s: Name of current post. Only visible to screen readers */
					__( 'Continue reading<span class="screen-reader-text"> "%s"</span>', 'analysis' ),
					array(
						'span' => array(
							'class' => array(),
						),
					)
				),
				get_the_title()
			) );

			wp_link_pages( array(
				'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'analysis' ),
				'after'  => '</div>',
			) );
			?>

			<span class="tags-list">
				<?php analysis_tags_list(); ?>
			</span>

			<div class="author-meta">
					<itemscope itemprop="image" alt="Photo of <?php the_author_meta( 'display_name' ); ?>">
						<div class="meta-wrap">
							<?php if(function_exists('get_avatar')) { echo get_avatar( get_the_author_meta('email'), '100' ); } ?>
							<h3 class="vcard author" itemprop="url" rel="author">
							<a href="<?php echo esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) ); ?>" class="fn" itemprop="name">
								<itemprop="author" itemscope itemtype="https://schema.org/Person">
								<?php the_author_meta( 'display_name' ); ?></a>
							</h3>
						</div>
								<span class="author-description">
									<?php the_author_meta('description') ?>
								</span>
								<class="post-author-links">

								<?php if (get_the_author_meta('twitter') != ""): ?>
									<a class=”author-link t” title=”Follow on Twitter” href=”https://twitter.com/<?php echo get_the_author_meta('twitter'); ?>” target="_blank">
									<i class="fa fa-twitter"></i></a>
								<?php endif; ?>
			</div>

			<footer class="entry-footer">
						<?php
							comments_template();
						?>
			</footer>

		</div><!-- .entry-content -->
	</div>
</article><!-- #post-<?php the_ID(); ?> -->
