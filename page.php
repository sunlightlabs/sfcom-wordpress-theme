<?php
if(!isset($sidebar_name)) {
	$sidebar_name = false;
}
?>
<?php get_header(); ?>
	<!-- page-nosidebar.php -->
	<main role="main" class="has-sidebar">
		<!-- section -->
		<section>

		<!--h1><?php the_title(); ?></h1-->

		<?php if (have_posts()): while (have_posts()) : the_post(); ?>

			<!-- article -->
			<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

				<?php the_content(); ?>

				<?php comments_template( '', true ); // Remove if you don't want comments ?>

			</article>
			<!-- /article -->

		<?php endwhile; ?>

		<?php else: ?>

			<!-- article -->
			<article>

				<h2><?php _e( 'Sorry, nothing to display.', 'html5blank' ); ?></h2>

			</article>
			<!-- /article -->

		<?php endif; ?>

		</section>
		<!-- /section -->
	</main>

<?php get_sidebar($sidebar_name); ?>

<?php get_footer(); ?>
