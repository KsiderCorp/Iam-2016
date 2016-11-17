<div class="grd_news-wrap">
<?php
$do_not_duplicate = array();    
$sticky = get_option('sticky_posts');
rsort( $sticky );
$sticky = array_slice( $sticky, 0, 10);
$argst = array( 
    'category_name' => 'graduate',
    'posts_per_page' => 1, 
    'order'=> 'DESC',
    'post__in' => $sticky,
    'caller_get_posts' => 1, );
query_posts($argst );
if (have_posts()) :  while (have_posts()) : the_post(); $do_not_duplicate[] = $post->ID;?>
       
    <div class="grd_stick">
      <a href="<?php the_permalink(); ?>"><span><?php the_title(); ?></span></a>  
    </div>
 <?php wp_reset_postdata(); ?>   
<?php endwhile; endif; ?>    

    <div class="grd_news">
<?php 
$tags = array( 
    'posts_per_page' => 3, 
    'order'=> 'DESC',
    'orderby' =>'date', 
    'post__not_in' => $do_not_duplicate,
    'category_name' => 'graduate',);
query_posts($tags);
if (have_posts()) : while (have_posts()) : the_post(); $do_not_duplicate[] = $post->ID;?>    
    
    
    
      <div class="grd_new"><a href="<?php the_permalink(); ?>"><span><?php the_title(); ?></span></a> </div>
          
    
<?php wp_reset_postdata(); ?>
<?php endwhile; else : endif; ?>    
    </div>
</div>