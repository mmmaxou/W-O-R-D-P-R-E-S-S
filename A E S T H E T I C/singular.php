<?php get_header(); ?>

<main class="container" role="main">
  <div class="row">
    <div class="col-md-9">
      <!-- La boucle -->
        <?php 
            if(have_posts()) :while (have_posts()) : the_post();
                    get_template_part('partials/content','page');
                endwhile;endif;
        
        ?>
    </div>
    <div class="col-md-3">
      <ul class="list-cat">
        <!-- Liste toutes les catégories -->
      </ul>
    </div>
  </div>
</main>

<?php get_footer(); ?>
