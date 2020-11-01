<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package analysis
 */

get_header();
?>
		<main id="main" class="site-main">
			<div class="land-banner">
				<div class="land-banner-left">
					<div class="background">
						<div class="foreground">
						</div>
					</div>
				</div>

				<div class="land-banner-right">
					<div class="logomark">
						<div class="logo-img">
						</div>
						<p>deadsuperhero</p>
					<h1 class="smaller">Utilizing Weapons of</h1>
					<h1 class="bigger">Mass Creation</h1>
					<p class="lead">Sean Tilley is an artist, musician, writer, programmer, game developer, and comedian exploring Free Software, Creative Commons, and decentralization.</p>
					<button class="primary" href="/about"><i class="fa fa-angle-double-right" aria-hidden="true"></i> Tell Me More!</button>
				</div>
			</div>
		</div>

			<hr></hr>

			<div id="recent-updates">
				<h2><i class="fa fa-newspaper-o" aria-hidden="true"></i> From the Blog</h2>
				<div class="latest_posts_wrapper">
				<div class="latest_posts">
						<?php echo do_shortcode("[ic_add_posts showposts='1' template='very-latest-post.php']") ?>
						<?php echo do_shortcode("[ic_add_posts showposts='6' offset='1']") ?>
				</div>
				<a href="https://deadsuperhero.com/blog" class="action-link"><i class="fa fa-chevron-right" aria-hidden="true"></i> Read More</a>
				</div>
				<div id="latest-statuses">
					<h2><i class="fa fa-globe" aria-hidden="true"></i> From the Web</h2>
					<div class="status-latest">
						<?php echo do_shortcode("[mastodon exclude_reblogs="true"]") ?>
					</div>
				</div>
			</div>
		</main><!-- #main -->

<?php
get_footer();
