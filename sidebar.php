<aside class="sidebar">
      <h2 class="sidebar__title">Latest</h2>
      <?php
      // The Query
      // ID de ma catégorie Edge Case
      $edge_case_category_id = 19;

      //Je récupère les informations de ma catégorie
      $edge_case_category = get_category( $edge_case_category_id );

      // Je récupère les posts de ma catégorie Edge Case
      $edge_case_posts_query = new WP_Query( array(
        'posts_per_page' => 2,
        // 'paged' => 2,
        'cat' => $edge_case_category_id
      ) );

      // Je teste si j'ai des résultats dans ma requête personnalisée sur la catégorie Edge Case
      if ( $edge_case_posts_query -> have_posts(  )) {
        ?>
        <div class="archive">
        <?php
        // J'affiche le nom de ma catégorie
        ?>
        <h3 class="archive__title"><?php echo $edhe_case_category -> name ; ?></h3>
        <?php
        // Je boucle sur mes résultats de ma requête personnalisée sur la catégorie Edge Case
          while ($edge_case_posts_query -> have_posts(  )) {
            // Je demande à WP de mettre les informations de mon post en cours (de ma requête personnalisée) dans la variable globale avec laquelle 
            // travaillent les Templates Tags
              $edge_case_posts_query -> the_post(  );
              // Je peux donc travailler avec mes Template Tags
        ?>
          <a class="archive__link" href="<?php the_permalink(  ); ?>">
          <?php the_title( ); ?></a>
        <?php
          }
        ?>
        </div>
        <?php
          /* Je dis à WP qu'il peut restaurer ses variables globales pour reprendre sa requête principale (Main Loop) */
          wp_reset_postdata(  );
      }

      // The Query
      $aciform_category_id = 2;

      $aciform_category = get_category( $aciform_category_id );

      $aciform_posts_query = new WP_Query(array(
        'posts_per_page' => 2,
        // 'paged' => 2,
        'cat' => $aciform_category_id
      ) );

      // The Loop
      if ($aciform_posts_query->have_posts() ) {
        ?>
        <div class="archive">
          <h3 class="archive__title"><?php echo $aciform_category->name; ?></h3>
        <?php
          while ($aciform_posts_query->have_posts()) {
            $aciform_posts_query->the_post();
        ?>
          <a class="archive__link" href="<?php the_permalink(  ); ?>">
          <?php the_title( ); ?></a>
          <?php
            }
          ?>
        </div>
        <?php
          /* Restore original Post Data */
          wp_reset_postdata(  );
      }

      // The Query
      $blogroll_category_id = 6;

      $blogroll_posts_query = new WP_Query( array(
        'posts_per_page' => 2,
        // 'paged' => 2,
        'cat' => $blogroll_category_id
      ) );


      // The Loop
      if ( $blogroll_posts_query -> have_posts(  )) {
        $blogroll_category = get_category ($blogroll_category_id);
        ?>
        <div class="archive">
          <h3 class="archive__title"><?php echo $aciform_category->name; ?></h3>
          <?php
            while (^$blogroll_posts_query -> have_posts(  )) {
              $blogroll_posts_query -> the_post(  );
          ?>
          <a class="archive__link" href="<?php the_permalink(  ); ?>">
          <?php the_title( ); ?></a>
          <?php
            }
          ?>
        </div>
        <?php
          /* Restore original Post Data */
          wp_reset_postdata(  );
      }
      ?>
    </aside>