<?php
/*
 * Template Name: Staff Page
 */
?>
<?php get_header(); ?>
	<!-- team.php -->
	<main role="main" class="staff-page">
		<!-- section -->
		<section>

		<h2>SUNLIGHT FOUNDATION STAFF</h2>
		<?php if (have_posts()): while (have_posts()) : the_post(); ?>
			<?php $meta = get_post_meta($post->ID); ?>

		<div class="staffHeader">
			<span class="imgWrapper"><?php the_post_thumbnail() ?></span>
			<h3 class="name"><?php the_title() ?></h3>
			<span class="staffTitle"><?php print $meta['staff-role'][0] ?></span>
			<div class="staffFollow">
        <?php if($meta['staff-twitter'] && $meta['staff-twitter'][0]) { ?>
          <a href="http://twitter.com/<?php print $meta['staff-twitter'][0] ?>">
          <span class="sficon-twitter"></span>
	        <span><?php print $meta['staff-twitter'][0] ?>&nbsp;&nbsp;</span></a>
        <?php } ?>

        <?php if($meta['staff-linkedin'] && $meta['staff-linkedin'][0]) { ?>
          <a href="http://www.linkedin.com/in/<?php print $meta['staff-linkedin'][0] ?>">
	          <span class="sficon-linkedin"></span>
	          <span><?php print $meta['staff-linkedin'][0] ?>&nbsp;&nbsp;</span></a>
        <?php } ?>


        <?php if($meta['staff-github'] && $meta['staff-github'][0]) { ?>
          <a href="http://www.github.com/<?php print $meta['staff-github'][0] ?>">
	          <span class="sficon-github"></span>
	          <span><?php print $meta['staff-github'][0] ?>&nbsp;&nbsp;</span></a>
        <?php } ?>
    	</div>
    </div>

			<!-- article -->
			<article id="post-<?php the_ID(); ?>" <?php post_class("row"); ?>>

				<div class="col-md-8">

					<?php the_content(); ?>

				</div>
				<div class="col-md-4 sidebar">
					<h3>Recent blog contributions from <?php the_title() ?></h3>

					<?php
						// Get 5 posts by this author.
						$post_query = new WP_Query(array(
							'author_name' => $meta['username'][0],
							'posts_per_page' => 5
						));

						if ( $post_query->have_posts() ) {

							echo '<ul class="hfeed bulleted staff-blog-posts">';
							while ( $post_query->have_posts() ) {
								$post_query->the_post();

								echo '<li class="hentry">
    								<a href="'. get_the_permalink() .'" class="title" rel="bookmark">'. get_the_title() .'</a>
    								<div class="entryMetaData">
    									<time datetime="'. get_the_time('c') .'" class="published" pubdate="">
    										'. get_the_time('F j, Y') .'
    									</time>
    								</div>
    							</li>';
							}
							echo '</ul>';

							echo '<a href="/blog/author/'. $meta['username'][0] .'/">Read more posts by this author.</a>';
							/* Restore original Post Data */

						}
						wp_reset_postdata();
					?>
				</div>


			</article>

			<?php edit_post_link(); ?>
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

<?php get_footer(); ?>
