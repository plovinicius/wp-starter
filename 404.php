<?php
/**
 * The template for displaying 404 pages (not found)
 */

get_header(); ?>

  <main id="main">
    <div class="error-404 not-found">
      <header class="page-header">
        <h1 class="page-title"><?php _e( 'Oops! That page can&rsquo;t be found.', 'wp-starter' ); ?></h1>
      </header>

      <div class="page-content">
        <p><?php _e( 'It looks like nothing was found at this location. Maybe try a search?', 'wp-starter' ); ?></p>
        <?php get_search_form(); ?>
      </div>
    </div>
  </main>

<?php get_footer();
