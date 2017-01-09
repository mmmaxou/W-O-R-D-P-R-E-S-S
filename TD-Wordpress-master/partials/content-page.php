
    <article id="post-" class="post ">      
        <div class="post-single">   <?php the_post_thumbnail('post-list');?>    </div> 
        <div class="post-single">      
             <div class="post-meta row">    
                <p class="post-meta-categories col col-md-9"><?php 
                    ?></p>     
                <p class="post-meta-date col col-md-3"><?php the_time('j F Y ');?></p>    
            </div>    
             <h2 class="post-title"><?php the_title();?></h2>    
             <p><?php the_content(); ?></p>
        </div>    
   </article> 
