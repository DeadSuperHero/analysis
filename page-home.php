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
			<div class="jumbotron">
				<h1>Sean Tilley</h1>
				<p class="lead">Obviously this site is under construction.</p>
				<hr></hr>
				<p>Sorry about all this placeholder content. I'm still building everything.</p>
				<button class="primary">It's OK</button>
			</div>

			<hr></hr>

			<div id="recent-updates">
				<h2>Recent Updates</h2>
				<div class="latest_posts">
					<?php echo do_shortcode("[ic_add_posts showposts='3' template='content-embed.php']") ?>
				</div>
				<div id="latest-status">
					<p>More fake stuff here.</p>
				</div>
			</div>

			<div id="testimonials">
				<h2> <i class="fa fa-users" aria-hidden="true"></i> Testimonials</h2>
				<?php echo do_shortcode("[pts_slideshow postid='471']") ?>
			</div>

		</main><!-- #main -->

<?php
get_footer();
