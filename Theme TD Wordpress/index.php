<?php get_header();?>

<main class="container" role="main">
  <div class="row">
    <div class="col-md-9">
        <h1>Hey coucou ! Tu aimes les poneys ?</h1>
        <?php if ( have_posts() ) : while ( have_posts() ) : the_post();
//        the_title('<h1>','</h1>');
        get_template_part('partials/content');
        
        //End the loop
        endwhile; endif; ?>
      <!-- La boucle -->
    </div>
    <div class="col-md-3">
      <ul class="list-cat">
        <!-- Liste toutes les catégories -->
      </ul>
    </div>
  </div>
</main>

<?php get_footer(); ?>
