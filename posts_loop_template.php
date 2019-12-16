<!-- Note: if you make changes to this file, move it to your current theme's
	directory so this file won't be overwritten when the plugin is upgraded. -->

<!-- Start of Post Wrap -->
<div class="post_embed">
  <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
  	<div class="article_insert">
  		<header class="entry-header">

  				<div class="article-begin">
  						<?php analysis_post_thumbnail(); ?>
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

  							<span class="category-list">
  								<?php analysis_category_list(); ?>
  							</span>

  						</div><!-- .entry-meta -->
  				</div>

  			<?php endif; ?>
  		</header><!-- .entry-header -->

  		<div class="entry-content">
  			<?php the_excerpt(); ?>

  			<span class="tags-list">
  				<?php analysis_tags_list(); ?>
  			</span>

  		</div><!-- .entry-content -->
</div>
<!-- // End of Post Wrap -->
