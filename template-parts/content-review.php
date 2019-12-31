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

					if ( 'review' === get_post_type() ) :
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

			<div class="about_media">
				<a href="<?php the_field('link_to_media'); ?>">Check It Out!</a>
				<b>Creator:</b>
				<a href="<?php the_field('creator_site'); ?>"><?php the_field('creator'); ?></a>
			</div>

			<div class="rating">
				<div class="score">
					<?php the_field('rating'); ?> / 5
				</div>
			</div>

			<div id="review_details">
				<div class="compare">
					<div class="pros">
						<h3><i class="fa fa-plus-circle" aria-hidden="true"></i> Pros</h3>
						<?php the_field('pros'); ?>
					</div>
					<div class="cons">
						<h3><i class="fa fa-minus-circle" aria-hidden="true"></i> Cons</h3>
						<?php the_field('cons'); ?>
					</div>
				</div>


				<div class="verdict">
					<b>Verdict:</b>
					<?php the_field('verdict'); ?>
				</div>
			</div>

			<span class="tags-list">
				<?php analysis_tags_list(); ?>
			</span>

			<div class="author-meta">
					<itemscope itemprop="image" alt="Photo of <?php the_author_meta( 'display_name' ); ?>">
						<div class="meta-wrap-outer">
							<?php if(function_exists('get_avatar')) { echo get_avatar( get_the_author_meta('email'), '100' ); } ?>
							<div class="meta-wrap-inner">
								<h1 class="vcard author" itemprop="url" rel="author">
								<a href="<?php echo esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) ); ?>" class="fn" itemprop="name">
									<itemprop="author" itemscope itemtype="https://schema.org/Person">
									<?php the_author_meta( 'display_name' ); ?></a>
								</h1>
								<div class="post-author-links">
									<?php if (get_the_author_meta('twitter') != ""): ?>
										<a class="author-link t" title="Follow on Twitter" href="https://twitter.com/<?php echo get_the_author_meta('twitter'); ?>" target="_blank">
										<i class="fa fa-twitter"></i></a>
									<?php endif; ?>

									<?php if (get_the_author_meta('diaspora') != ""): ?>
										<a class="author-link t" title="Follow on Diaspora" href="<?php echo get_the_author_meta('diaspora'); ?>" target="_blank">
										<i class="fa fa-diaspora"></i></a>
									<?php endif; ?>

									<?php if (get_the_author_meta('linkedin') != ""): ?>
										<a class="author-link t" title="Follow on LinkedIn" href="<?php echo get_the_author_meta('linkedin'); ?>" target="_blank">
										<i class="fa fa-linkedin"></i></a>
									<?php endif; ?>

									<?php if (get_the_author_meta('pleroma') != ""): ?>
										<a class="author-link t" title="Follow on Pleroma" href="<?php echo get_the_author_meta('pleroma'); ?>" target="_blank">
										<i class="fa fa-pleroma"></i></a>
									<?php endif; ?>

									<?php if (get_the_author_meta('peertube') != ""): ?>
										<a class="author-link t" title="Follow on PeerTube" href="<?php echo get_the_author_meta('peertube'); ?>" target="_blank">
										<i class="fa fa-peertube"></i></a>
									<?php endif; ?>

									<?php if (get_the_author_meta('pixelfed') != ""): ?>
										<a class="author-link t" title="Follow on Pixelfed" href="<?php echo get_the_author_meta('pixelfed'); ?>" target="_blank">
										<i class="fa fa-pixelfed"></i></a>
									<?php endif; ?>
								</div>
							</div>
						</div>
								<span class="author-description">
									<?php the_author_meta('description') ?>
								</span>
		</div>

			<footer class="entry-footer">
						<?php
							comments_template();
						?>
			</footer>

		</div><!-- .entry-content -->
	</div>
</article><!-- #post-<?php the_ID(); ?> -->
