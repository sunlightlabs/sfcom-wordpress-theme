<?php get_header(); ?>
<?php
	$archive_category = false;
	$queried_object = get_queried_object();
	if(get_class($queried_object) == 'WP_Term') {
		$archive_category = $queried_object->name;
	}
?>
	<!-- index.php -->
	<main role="main" class="has-sidebar">
		<!-- section -->
		<section>

			<div class="blog-nav">
				<ul>
					<li class="channel <?php if(!$archive_category) print 'active' ?>">
						<a href="/blog/">all</a>
					</li>
					<li class="channel technology <?php if($archive_category == 'Technology') print 'active' ?>">
						<a href="/topics/channels/channel-technology/">technology</a>
					</li>
					<li class="channel policy <?php if($archive_category == 'Policy') print 'active' ?>">
						<a href="/topics/channels/channel-policy/">policy</a>
					</li>
					<li class="channel investigations <?php if($archive_category == 'Investigations') print 'active' ?>">
						<a href="/topics/channels/channel-investigations/">investigations</a>
					</li>
					<li class="channel multimedia <?php if($archive_category == 'Multimedia') print 'active' ?>">
						<a href="/topics/channels/channel-multimedia/">multimedia</a>
					</li>
				</ul>
			</div>

			<?php if (have_posts()): while (have_posts()) : the_post(); ?>

				<!-- article -->
				<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

					<!-- post thumbnail -->
					<?php /* if ( has_post_thumbnail()) : // Check if thumbnail exists ?>
						<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
							<?php the_post_thumbnail(array(120,120)); // Declare pixel size you need inside the array ?>
						</a>
					<?php endif; */ ?>
					<!-- /post thumbnail -->

					<!-- post title -->
					<?php /*
					<h2>
						<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a>
					</h2-->
					*/ ?>
					<!-- /post title -->

					<!-- post details -->
					<span class="date"><?php the_time('F j, Y'); ?> <?php the_time('g:i a'); ?></span>
					<span class="author"><?php _e( 'Published by', 'html5blank' ); ?> <?php the_author_posts_link(); ?></span>
					<span class="comments"><?php if (comments_open( get_the_ID() ) ) comments_popup_link( __( 'Leave your thoughts', 'html5blank' ), __( '1 Comment', 'html5blank' ), __( '% Comments', 'html5blank' )); ?></span>
					<!-- /post details -->

					<?php html5wp_excerpt('html5wp_index'); // Build your custom callback length in functions.php ?>

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


			<?php get_template_part('pagination'); ?>

		</section>
		<!-- /section -->
	</main>

<?php get_sidebar(); ?>

<?php get_footer(); ?>
