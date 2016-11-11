<div class="block">
   
    <div class="category_head">
    
 <h1><?php single_cat_title(''); ?></h1>
       
   
       
<?php  
$cid = $wp_query->get_queried_object_id(); ?>         
    
<div class="category_head-submenu">
<ul>        
<?php 
$terms = get_terms('bookgift', 'exclude='.$cid);
$currentterm = get_term_by( 'slug', get_query_var( 'term' ), get_query_var( 'taxonomy' ) );

foreach ($terms as $term) {
    
$class = $currentterm->slug == $term->slug ? 'hide' : '' ; ?>
      
<li class="<?php echo $class; ?>"><a href="<?php echo get_term_link($term); ?>"><?php echo $term->name; ?></a></li> 
        
<?php } ?>           
      
</ul>
</div>                                  
    </div>
    
</div>
  

<div class="reached">
   <div class="block">
       
     <div class="pure-g">
         <div class="pure-u-2-3">
         
  
   
                   
    <?php 
query_posts($query_string . "&posts_per_page=-1");
if (have_posts()) : while (have_posts()) : the_post(); ?>


<div class="achive_block"> 

<?php if( get_field('cover') ):
      $img = get_field('cover'); ?>
      
      <div class="achive_cover id-<?php the_ID(); ?>">
<style>.achive_cover.id-<?php the_ID(); ?> {background-image: url(<?php echo $img; ?>);}</style>
      </div>
<?php else :  $img =  'https://source.unsplash.com/random';  endif; ?>	
  
      
  <div class="achive_cnt">   
    <div class="achive_title">
<a href="<?php the_permalink(); ?>" rel="<?php the_ID(); ?>" class="gift-link post-link"  data-link="<?php echo home_url();?>/ajaxloader/">
<?php the_title(); ?>
</a>    
      </div>
      <div class="achive_owners">
          <?php echo get_the_term_list( $post->ID, 'authors', '', ', ', '' ); ?>
      </div> 
  </div>              
           
</div>   
        
  
<?php endwhile; else : ?>
<?php endif; ?>
                                                   
                                      
         </div>
     </div>    
     
        

 <?php  include(TEMPLATEPATH . '/template/uni/pagination.php'); ?>      
    </div>
</div>