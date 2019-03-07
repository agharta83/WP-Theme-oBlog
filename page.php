<?php get_header(); ?>

<div class="main-sidebar-wrapper main-sidebar-wrapper--without-sidebar">
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
</div>

<?php get_footer(); ?>