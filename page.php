<?php get_header(); ?>
<?php if (have_posts()) : while (have_posts()) : the_post(); 

if( is_page('education') ){ 
    include(TEMPLATEPATH . '/template/page/education.php'); 
}
elseif( is_page('mkmk') ){
  include(TEMPLATEPATH . '/template/page/mkmk.php'); 
}
elseif( is_page('getmail') || is_page('mail') ){ 
  include(TEMPLATEPATH . '/template/page/getmail.php'); 
}

elseif( is_page('webinfo') || is_page('edition') ){ 
  include(TEMPLATEPATH . '/template/page/editors.php'); 
}
elseif( is_page('en') ){ 
  include(TEMPLATEPATH . '/template/page/english.php'); 
}
else { ?> 
  
<div class="block">
    
    <div class="single_titel">
        <h1><?php the_title(); ?></h1>
    </div>
    
<div class="single_wrap">
        
<div class="single_discription">

    <div class="single-date descript_blc">
        <span><?php the_time('j F, Y | G:i'); ?></span>
    </div>

    
<?php  if($post->post_parent) {
    echo '<div class="single-tax descript_blc"><a href="'.get_permalink($post->post_parent).'">'.get_the_title($post->post_parent).'<i class="icon-ios-arrow-thin-up"></i></a></div>';
       } ; ?>
    
    
    
</div>
        
        <div class="pure-g">
            <div class="pure-u-2-3">
        
                             
        <div class="single_content">
            
        <div class="single_content-exerpt lead hide">
            <?php the_excerpt(); ?>
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

<?php 
$rel = get_field('rel');
if( $rel ): ?>

<div class="related_posts">
	<ul>
	<?php foreach( $rel as $p ): // variable must NOT be called $post (IMPORTANT) ?>
    <?php setup_postdata($post); ?>
	    <li>
	    	<a href="<?php echo get_permalink( $p->ID ); ?>"><?php echo get_the_title( $p->ID ); ?></a>
	    </li>
	<?php wp_reset_postdata(); ?>    
	<?php endforeach; ?>
	</ul>
	
	
</div>

<?php endif; ?>  
              
</div>
        </div>
        
        
    </div>
</div>
 
</div>
  
<?php } endwhile; else : ?>


<?php endif; ?>

	
<?php get_footer(); ?>