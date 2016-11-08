<link rel="stylesheet" href="<?php bloginfo("template_url"); ?>/template/css/science.css">
<?php if( get_field('mainpic') ):
    $attachment_id = get_field('mainpic'); $size = "full"; 
    $image = wp_get_attachment_image_src( $attachment_id, $size );?>
<style>
.sc_single-head { background-image: url(<?php echo $image[0]; ?>); }
.sc_single-title.nonvideo { background-image: url(<?php echo $image[0]; ?>); }
</style>
<?php else : endif; ?>

<?php 

$cur_terms = get_the_terms( $post->ID, 'science_authors' );
$autors = ' ';
foreach($cur_terms as $cur_term){
    $term_id = $cur_term->term_id;
    if( get_field('weblink', 'science_authors_'.$term_id) ) :
    $link = get_field('weblink', 'science_authors_'.$term_id);
    else : endif;   
    $posit = '';
    if( get_field('webpos', 'science_authors_'.$term_id) ) :
    $pos = get_field('webpos', 'science_authors_'.$term_id);
    $posit = '<span class="position">'.$pos.'</span> ';
    else : endif;
    
	$autors = $posit.'<a href="'.$link.'" class="sc_aithors-link">'. $cur_term->name .'</a>';
}
?>



<?php if(has_post_format( 'video' ) ) : ?>     

<div class="sc_single-video sc_single-head">
   
<div class="sc_single-title hasvideo">
        
      
    <div class="pure-g">
        <div class="pure-u-1-5 pure-u-sm-1">
            
<div class="sc_single-videoblock">
    <?php 
    if(get_field('link') ) : 
$vidlink = get_field('link');
  else : 
 $vidlink = 'x9SZM4rDZn8'; 
 endif; ?>

        <div class="video-block" id="video-block">
<a data-iframe="<?php echo $vidlink; ?>" class="video-loader"></a>
<div class="shadow"></div>
       </div>

</div>          
            
        </div>
        
        <div class="pure-u-4-5 pure-u-sm-1">
            
<div class="sc_single-name">
     <a href="/science" class="hprew">/наука</a><?php the_title(); ?>
            
    <div class="sc_single-authors"><i class="icon-ios-mic-outline"></i> <?php echo $autors; ?></div>            
</div>
            
        </div>
    </div>  
           


        
    </div>
    

<div class="shadows"></div>    
</div>

<div class="sc_single-footer hasvideo">
        
       <div class="pure-g">
       <div class="block">
        <div class="pure-u-1-3">
            
        <div class="science-date">
           <span><?php the_time('j F, Y | G:i'); ?></span>	 
        </div>
            
        </div>
  <div class="pure-u-1-3 center">
<!-- likely-light -->
    <div class="likely likely-small" data-single-title="Поделиться">
		<div class="facebook" title="Поделиться ссылкой на Фейсбуке"></div>
		<div class="twitter" title="Поделиться ссылкой в Твиттере"></div>
		<div class="vkontakte" title="Поделиться ссылкой во Вконтакте"></div>
		<div class="gplus" title="Поделиться ссылкой в Гугл-плюсе"></div>
    </div>
    
 </div>
        <div class="pure-u-1-3">
            <div class="scs right">
        <?php the_terms( $post->ID, 'science_categories', ' ', ' '); ?>	
            </div>
       </div>
       </div>
    </div>  
   
        
    </div>
<?php else : ?>

<div class="sc_single-txt sc_single-head">
<div class="sc_single-title novideo">

    <div class="sc_single-name">
        <a href="/science" class="hprew">/наука</a>
        <?php the_title(); ?>

            <div class="sc_single-authors">
<i class="icon-man-people-streamline-user"></i> <?php echo $autors; ?>
            </div>
    </div>
</div>
    
 
<div class="shadows"></div>
</div>
<div class="sc_single-footer">
        
       <div class="pure-g">
       <div class="block">
        <div class="pure-u-1-3">
            
        <div class="science-date">
           <span><?php the_time('j F, Y | G:i'); ?></span>	 
        </div>
            
        </div>
  <div class="pure-u-1-3 center">

    <div class="likely likely-small" data-single-title="Поделиться">
		<div class="facebook" title="Поделиться ссылкой на Фейсбуке"></div>
		<div class="twitter" title="Поделиться ссылкой в Твиттере"></div>
		<div class="vkontakte" title="Поделиться ссылкой во Вконтакте"></div>
		<div class="gplus" title="Поделиться ссылкой в Гугл-плюсе"></div>
    </div>
    
 </div>
        <div class="pure-u-1-3">
            <div class="scs right">
        <?php the_terms( $post->ID, 'science_categories', ' ', ' '); ?>	
            </div>
       </div>
       </div>
    </div>  
   
        
    </div>    

<?php endif; ?>   

<div class="sc_single-content" id="content">
    
<div class="block">
       
       <div class="pure-g">
           <div class="pure-u-2-3">
        <div class="sc_single-exerpt">
            <?php the_excerpt(); ?>
        </div>           
        <div class="sc_single-block">
            <?php the_content(); ?>
        </div>
          </div>
           <div class="pure-u-1-3">
              
<?php 
$poid = array( $post->ID );    
if( has_term( '', 'science_tags', $post->ID ) ){
?> 
<div class="sc_single-related">

    <div class="rblock">
<h4 class="sc_single-header"><span>Похожие</span></h4>

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

            ?>
    <style>
        .sc-related-pic.id<?php the_ID();?> {
            background-image: url(<?php echo $image[0]; ?>);
        }
    </style>
    <?php else :?><?php endif; ?>

            

<a class="sc-related-block" href="<?php the_permalink(); ?>" class="">
               <div class="sc-related-pic id<?php the_ID();?>"></div>
               <div class="sc-related-title">
       <div class="sc-related-authors"><?php echo $autors;?></div>
       <div class="sc-related-names"><?php the_title(); ?></div>
               </div>
</a>
           
            
            <?php wp_reset_postdata(); ?>
            <?php endforeach;  ?>

   
   </div>
</div>  
<?php } ?>             
               
           </div>
       </div>

        


</div>  
</div>






<div class="science-single_comment">
<!--     <div class="block">
     <h3 class="center">Коментарии</h3>
     <?php // comments_template(); ?>
     </div>-->
</div> 