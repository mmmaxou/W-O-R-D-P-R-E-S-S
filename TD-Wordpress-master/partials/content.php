<a href='<?php  echo get_permalink(); ?>' class="link-block">   
    <article id="post-" class="post post-list">      
        <div class="post-list-thumbnail">   <?php the_post_thumbnail('post-list');?>    </div> 
        <div class="post-list-content">      
             <div class="post-meta row">    
                <p class="post-meta-categories col col-md-9"><?php 
                    ?></p>     
                <p class="post-meta-date col col-md-3"><?php the_time('j F Y ');?></p>    
            </div>    
             <h2 class="post-title"><?php the_title();?></h2>    
             <p><?php the_excerpt(); ?></p>
        </div>    
   </article> 
</a> 