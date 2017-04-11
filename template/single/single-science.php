<div class="block">
    
    <div class="single_titel">
       <a href="/science/" class="back"><i class="icon-ios-arrow-thin-left"></i></a>
        <h1><?php the_title(); ?></h1>
    </div>
    
    <div class="single_wrap">
        
<div class="single_discription">

    <div class="single-date descript_blc">
        <span><?php the_time('j F, Y | G:i'); ?></span>
    </div>

    <div class="single-tax descript_blc">
<?php 
    $category = get_the_terms( $post->ID, 'science_categories' );

foreach( $category as $caty ){
        echo '<a href="'. get_term_link( (int)$caty->term_id, $caty->taxonomy ) .'">'. $caty->name .'</a>';     
    }      
?>
    </div>
    
    
</div>
        
        <div class="pure-g">
            <div class="pure-u-2-3">
                               
        <div class="single_content">
            
        <div class="single_content-exerpt lead">
            <?php the_excerpt(); ?>
        </div>  
        
<?php 
$image = '';
if( get_field('mainpic') ): 
    $attachment_id = get_field('mainpic'); 
    $size = "full";
    $image = wp_get_attachment_image_src($attachment_id, $size );
else : 
    $image[0] = 'https://source.unsplash.com/1600x900/?nature,water'; 
endif; 

if(get_field('link') ) : 
    $vidlink = get_field('link');
else : 
    $vidlink = 'XRGFpqdIQRE'; 
endif;            
            
?>  
<style>
.break_block-pic {background-image: url(<?php echo $image[0]; ?>);} 
</style> 
          

  
   <?php if(has_post_format( 'video' ) ) :  ?>
<div class="break_block">

 <div class="break_block-pic">   
         
   <div class="video_block" id="video-block">
<a data-iframe="<?php echo $vidlink; ?>" class="video-loader"></a>
   </div>  
   
 </div>   
       
</div>   
   
   <?php else : ?> 
     
   <?php endif; ?> 
   
       
                  
                    
        <div class="single_content-block">
            <?php the_content(); ?>
        </div>
            
        </div> 
                
            </div>
            
            <div class="pure-u-1-3">
                
                <div class="single_side">
                
 <?php 
$poid = array( $post->ID );    
if( has_term( '', 'science_tags', $post->ID ) ){
?> 

 <div class="related_posts">

<?php 
    $gettages = get_the_terms( $post->ID, 'science_tags' );
    $tags = array();
    foreach($gettages as $tag){
        $tag_id = $tag->term_id;
        $tags[] = $tag_id;
    }
      
    
    $rel = array( 
	
   'post__not_in' => $poid,
    'post_type'=>'science',
    'posts_per_page' => 3, 
    'orderby'=> 'date',
    'order'=> 'DESC', 
        
    'tax_query' => array(
		'relation' => 'OR',
		array(
			'taxonomy' => 'science_tags',
			'field' => 'id',
			'terms' => $tags ,
            'operator' => 'IN'
		),
	),
    );     
    $screl = get_posts( $rel );  
    foreach ($screl as $post) :  setup_postdata($post);

$cur_terms = get_the_terms( $post->ID, 'science_authors' );
$autors = ' ';
foreach($cur_terms as $cur_term){
    $term_id = $cur_term->term_id;
    $posit = '';
    if( get_field('webpos', 'science_authors_'.$term_id) ) :
    $pos = get_field('webpos', 'science_authors_'.$term_id);
    $posit = '<span class="position">'.$pos.'</span> ';
    else : endif;
    
	$autors = $posit.'<span">'. $cur_term->name .'</span>';
}

 if( get_field('mainpic') ):
            $attachment_id = get_field('mainpic');
            $size = "thumbnail"; 
            $image = wp_get_attachment_image_src( $attachment_id, $size );
else : endif;
     ?>
           

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

