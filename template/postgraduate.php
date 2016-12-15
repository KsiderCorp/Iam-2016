<?php get_header(); 
/*
Template Name: Аспирантура
*/
?>

<div class="block">
    <div class="posdoc-header">
        <h1><a href="/education/"><i class="icon-ios-arrow-thin-left"></i></a> Аспирантура</h1>
    </div>
    
<div class="single_discription">
 
    
<div class="single-tax descript_blc">

<?php 
$args = array( 
    'post_type'=>'employees',
    'include' => 572,
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
           
<div>Заведующая отделом:</div>
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
    
</div>


<div class="edu-wrap">
    <div class="block">
        
        <div class="pure-g">
            <div class="pure-u-2-3">
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>              
               <div class="grad-main_information">
                <?php the_content(); ?>
                </div>
   <?php endwhile; else : ?>
<?php endif; ?> 
            </div>
            <div class="pure-u-1-3">
             <div class="edu_news">
             
    <?php include(TEMPLATEPATH . '/template/page/postgrad/news.php'); ?>             
             </div>   
            </div>
        </div>
 </div>  
  

          
<?php include(TEMPLATEPATH . '/template/page/postgrad/persons.php'); ?>        
 </div> 




<?php get_footer(); ?>

