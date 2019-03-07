<?php get_header(); ?>

<div class="main-sidebar-wrapper">
  <main class="main">
  <?php
  if ( have_posts() ) {
    while ( have_posts() ) {
      the_post();

      get_template_part( 'template-parts/post/content' );
    }
  }
  ?>
  </main>

  <?php get_sidebar(); ?>
</div>

<?php get_footer(); ?>