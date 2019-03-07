<article class="post">
  <h2 class="post__title"><span class="post__title__text"><?php the_title(); ?></span></h2>
  <?php
  if ( has_post_thumbnail() ):
    the_post_thumbnail( 'post-thumbnail-square', ['class' => 'post__image'] );
  endif;
  ?>
  <img class="post__image" src="/images/black-white-city.jpg" alt="" />
  <div class="post__info">
    <span><?php the_date(); ?> &bull; <?php the_author(); ?></span>
  </div>
  <div class="post__content"><?php the_excerpt(); ?></div>
  <a href="<?php the_permalink(); ?>" class="post__read-next">Lire la suite</a>
</article>