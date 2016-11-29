<?php get_header(); 
/*
Template Name: Аспирантура
*/
?>

<div class="block">
    <div class="posdoc-header">
        <h1><a href="/educatio/"><i class="icon-ios-arrow-thin-left"></i></a> Аспирантура</h1>
    </div>
    
<?php $args = array( 
'post_type'=>'employees','include' => 572);
$postdoc = get_posts( $args );  
foreach ($postdoc as $post) :  setup_postdata($post);?>

<div class="director_blog">
<?php include(TEMPLATEPATH . '/template/uni/persone_strok.php'); ?>   
</div>       
       
<?php wp_reset_postdata(); ?>
<?php endforeach; ?>  
    
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

