<?php get_header(); ?>
  <!-- single.php -->
  <main role="main" class="has-sidebar">
  <!-- section -->
  <section>

  <?php if (have_posts()): while (have_posts()) : the_post(); ?>

    <!-- article -->
    <article id="post-<?php the_ID(); ?>" <?php post_class('blog-post'); ?>>
      <header>
        <!-- post title -->
        <h1>
          <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a>
        </h1>
        <!-- /post title -->

        <!-- post details -->
        <div class="meta">
          <span class="author tip">
              by <?php
                      if ( function_exists( 'coauthors_posts_links' ) ) {
                          coauthors_posts_links();
                      } else {
                          the_author_posts_link();
                      }
                   ?>
          </span>

          <?php category_icons() ?>

          <time datetime="<?php the_time('c'); ?> " class="published" pubdate="">
              <?php the_time('M j, Y g:i a'); ?>
          </time>
        </div>
        <!-- /post details -->

        <div class="social-sharing">
          Share This: <?php if ( function_exists( 'ADDTOANY_SHARE_SAVE_KIT' ) ) { ADDTOANY_SHARE_SAVE_KIT(); } ?>
        </div>
      </header>

      <?php the_content(); // Dynamic Content ?>

      <footer>
        <div class="tags"><?php the_tags( __( 'Tags: ', 'html5blank' ), ', ', '<br>'); // Separated by commas with a line break at the end ?></div>

        <div class="category"><?php _e( 'Categorized in: ', 'html5blank' ); the_category(', '); // Separated by commas ?></div>

        Share This: <?php if ( function_exists( 'ADDTOANY_SHARE_SAVE_KIT' ) ) { ADDTOANY_SHARE_SAVE_KIT(); } ?>

        <?php
          // If comments are open or we have at least one comment, load up the comment template.
          if ( comments_open() || get_comments_number() ) :
            comments_template();
          endif;
        ?>
      </footer>

      <?php /* comments_template(); */ ?>

    </article>
    <!-- /article -->

  <?php endwhile; ?>

  <?php else: ?>

    <!-- article -->
    <article>

      <h1><?php _e( 'Sorry, nothing to display.', 'html5blank' ); ?></h1>

    </article>
    <!-- /article -->

  <?php endif; ?>

  </section>
  <!-- /section -->
  </main>

<?php get_sidebar(); ?>

<?php get_footer(); ?>
