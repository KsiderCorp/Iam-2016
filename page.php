<?php get_header(); ?>
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
<div class="block">
    
    <div class="single_titel">
        <h1><?php the_title(); ?></h1>
    </div>
    
    <div class="single_wrap">
        
<div class="single_discription">

    <div class="single-date descript_blc">
        <span><?php the_time('j F, Y | G:i'); ?></span>
    </div>

    
</div>
        
        <div class="pure-g">
            <div class="pure-u-2-3">
                    
                              
        <div class="single_content">
            
        <div class="single_content-exerpt lead">
            <?php // the_excerpt(); ?>
        </div>     
        
<?php if( get_field('postphoto') ):
    $image = get_field('postphoto'); ?>
<style>
.single_image { background-image: url(<?php echo $image; ?>); }
</style>
 <div class="single_image"> &nbsp;  </div> 
<?php else : endif; ?>                   
                    
        <div class="single_content-block">
            <?php the_content(); ?>
        </div>
            
        </div> 
                
            </div>
            
            <div class="pure-u-1-3">
                
                <div class="single_side">
                
             
               
                </div>
                
            </div>
        </div>
        
        
    </div>
</div>

<?php endwhile; else : ?>

<?php endif; ?>

	
<?php get_footer(); ?>