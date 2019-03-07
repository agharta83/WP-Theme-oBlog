<?php

get_header();

?>
<div class="main-sidebar-wrapper main-sidebar-wrapper--without-sidebar">
  <main class="main">
    <h1>R&eacute;sultats de la recherche pour le terme &laquo; <?php the_search_query(); ?> &raquo;</h1>
    <?php get_search_form(); ?>
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