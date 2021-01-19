<?php
/**
 * The template for displaying single page
 */

get_header(); ?>

  <main id="main">
		<?php if ( have_posts() ) {
			// Load posts loop.
			while ( have_posts() ) {
        the_post();
        the_content();
			}
		} else { ?>
      <p><?php _e( 'It looks like nothing was found at this location', 'wp-starter' ); ?></p>
		<?php } ?>
  </main>

<?php get_footer();
