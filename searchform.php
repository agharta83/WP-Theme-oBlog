<div class="search">
  <form class="search__form" action="<?php echo home_url(); ?>" method="get">
    <label class="search__form__label" for="search">
      <i class="fa fa-search" aria-hidden="true"></i>
    </label>
    <input class="search__form__field" type="text" name="s" value="<?php the_search_query(); ?>" placeholder="Rechercher" id="search" />
  </form>
</div>