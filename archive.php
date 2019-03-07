<?php

get_header();

?>
<div class="main-sidebar-wrapper">
  <main class="main">
    <section class="posts">
<?php

if ( have_posts() ) {
  while ( have_posts() ) {
    the_post();

    get_template_part( 'template-parts/post/excerpt' );
  }
}

?>
    </section>
    <?php the_posts_pagination(); ?>
  </main>
  <?php get_sidebar(); ?>
</div>
<?php

get_footer();