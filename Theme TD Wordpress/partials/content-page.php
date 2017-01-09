<article id="post-<?php the_ID() ?>" class="post post-single">
    <div class="post-single-content">
        <div class="post-meta row">
            <p class="post-meta-categories col col-md-9"><?php get_post_categories(get_the_ID()) ?> </p>
            <p class="post-meta-date col col-md-3"><?php the_time('F jS, Y'); ?></p>
        </div>
        <h2 class="post-title"><?php the_title(); ?></h2>
        <p><?php the_content(); ?></p>
    </div>
</article>