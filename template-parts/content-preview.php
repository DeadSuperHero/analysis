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
					<div class="post-thumbnail">
						<?php analysis_post_thumbnail(); ?>
					</div>
					<?php
					if ( is_singular() ) :
						the_title( '<h1 class="entry-title">', '</h1>' );
					else :
						the_title( '<h1 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h1>' );
					endif;

					if ( 'post' === get_post_type() ) :
						?>
						<div class="entry-meta">
							<?php
							analysis_posted_on();
							?>
						</div><!-- .entry-meta -->
				</div>

			<?php endif; ?>
		</header><!-- .entry-header -->

		<div class="entry-content">

			<?php the_excerpt(); ?>

		</div><!-- .entry-content -->
	</div>
</article><!-- #post-<?php the_ID(); ?> -->
