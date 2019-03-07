<?php

get_header();

?>

<div class="main-sidebar-wrapper main-sidebar-wrapper--without-sidebar">
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
</div>
<?php

get_footer();