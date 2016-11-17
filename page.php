<?php get_header(); ?>
<?php if (have_posts()) : while (have_posts()) : the_post(); 

if( is_page('education') ){ 
    include(TEMPLATEPATH . '/template/page/education.php'); 
}
elseif( is_page('mkmk') ){
  include(TEMPLATEPATH . '/template/page/mkmk.php'); 
}
elseif( is_page('getmail') ){ 
  include(TEMPLATEPATH . '/template/page/getmail.php'); 
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

    <div class="single-tax descript_blc">

    </div>
    
    
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
$poid = array( $post->ID );    
if( has_term( '', 'post_tag', $post->ID ) ){
?> 

 <div class="related_posts">

<?php

    $gettages = get_the_tags($post->ID);
    $tags = array();
    foreach($gettages as $tag){
        $tag_id = $tag->term_id;
        $tags[] = $tag_id;
    }
      
    
    $rel = array( 
	
    'posts_per_page' => 5, 
    'orderby'=> 'date',
    'order'=> 'DESC', 
    'exclude' => $post->ID,
    'tax_query' => array(
		'relation' => 'OR',
		array(
			'taxonomy' => 'post_tag',
			'field' => 'id',
			'terms' => $tags ,
            'operator' => 'IN'
		),
	),
    );     
    $screl = get_posts( $rel );  
foreach ($screl as $post) :  setup_postdata($post);
?>

            
<?php if( get_field('postphoto') ):
    $image = get_field('postphoto'); ?>
<style>.cover_pic.id<?php the_ID();?> {background-image: url(<?php echo $image; ?>);}</style>
<?php else : endif; ?>         

 <div class="related_post">
     
     <div class="related_post-titel">
     <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>   
     </div>
     <div class="related_post-date">
         <?php the_time('j F, Y | G:i'); ?>
     </div>
     
     <div class="cover_pic id<?php the_ID();?>">&nbsp;</div>
     
 </div>
           
            
<?php wp_reset_postdata(); endforeach; ?>  
    </div> 
   <?php } ?>               
               
                </div>
                
            </div>
        </div>
        
        
    </div>
</div>
  
<?php } endwhile; else : ?>


<?php endif; ?>

	
<?php get_footer(); ?>