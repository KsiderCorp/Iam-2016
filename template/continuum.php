<?php
/*
Template Name: Механика сплошных сред
*/
get_header(); 

if (have_posts()) : while (have_posts()) : the_post(); 

$include = '';
if( get_field('chief') ): 
    $include = get_field('chief'); 
else : 
    $include = '521,559,24,22,109'; 
endif;

$semterms = '';
if( get_field('semterms') ): 
    $semterms = get_field('semterms'); 
else : 
    $semterms = 'lectures'; 
endif;

$chief = array( 
    'post_type'=>'employees',
    'orderby'=> 'date',
    'include' => $include,   
    'order'=> 'DESC' );

$pictofon = '';
if( get_field('pictofon') ):
    $attachment_id = get_field('pictofon');
    $size = "full";
    $pictofon = wp_get_attachment_image_src( $attachment_id, $size );
else : 
$pictofon[0] = 'https://c2.staticflickr.com/2/1458/25937173862_f766f8650e_h.jpg';
endif;

?>


<div class="block">
    
        
   <div class="single_titel">
<!--<a href="/science_categories/<?php echo $semterms; ?>/" class="backlink">Научный семинар</a>-->
<h1><?php the_title(); ?></h1>
   </div> 
    
<div class="single_discription">
 
    
<div class="single-tax descript_blc">

<?php 
$args = array( 
    'post_type'=>'employees',
    'include' => 574,
    'posts_per_page' => 1,);
$postslist = get_posts( $args );  
foreach ($postslist as $post) :  setup_postdata($post);

$image = '';  
if( get_field('photo') ):
$attachment_id = get_field('photo');
$size = "thumbnail";
$image = wp_get_attachment_image_src( $attachment_id, $size );
else :
  $image = get_bloginfo("template_url").'/img/emploers/yo.svg';
endif; ?>	

<div class="man_strok">

<style>.man_face.id-<?php the_ID(); ?> {background-image: url(<?php echo $image[0]; ?>);}</style>
   
    <div class="man_face id-<?php the_ID(); ?>">
      &nbsp;  
    </div>
    <div class="man_cont">
        
        <div class="man_name">
           
<div>Ученый скретарь:</div>
<a href="<?php the_permalink(); ?>" class="card_link post-link" data-id="<?php the_ID(); ?>" rel="<?php the_ID(); ?>"  data-link="<?php echo home_url();?>/ajaxloader/"><?php the_title(); ?></a> 
<?php if( current_user_can('administrator') ){  echo get_the_ID();  } ?> 

       <div class="man_pos">
<?php if( get_field('position') ): the_field('position'); else : echo ''; endif; ?>, <?php if( get_field('rank') ): the_field('rank'); else : echo ''; endif; ?>
           </div>
           
       </div>
    </div>
</div>   

<?php wp_reset_postdata(); endforeach; ?> 

</div>
    
</div>
   
   <div class="work_shop-wrap">
    <div class="pure-g">
        <div class="pure-u-2-3">
            
         <div class="work_shop-content">
            <h3>Условия участия</h3>
             <?php the_content(); ?>
         </div>   
         
<?php include(TEMPLATEPATH . '/template/page/contmech/headers.php'); ?>         
<!--         <div class="work_shop-pic">
<style>
    .work_shop-pic { background-image: url('<?php echo $pictofon[0]; ?>');}  
</style>   
         </div> -->   
          
           <div class="workshop_registration">
<?php // echo do_shortcode( '[contact-form-7 id="1779" title="continuum"]' ); ?>
<?php  echo do_shortcode( '[contact-form-7 id="2054" title="mech of cont"]' ); ?>
           </div> 
            
    
        

     
     
    </div>
        
        
        
        <div class="pure-u-1-3">
        <div class="single_side">
<?php include(TEMPLATEPATH . '/template/page/contmech/seminars_list.php'); ?>
        </div>           
        </div>
    </div>  
        
       
   </div>
    
    
</div>

<?php endwhile; else : ?>
<?php endif; ?>
<?php get_footer(); ?>