<div class="block">
   
    <div class="category_head">
       
<?php 
global $wp_query;
$category = $wp_query->get_queried_object();
if ( !empty($category->parent) ) {
    
// print_r($category) ;  
$parent = '<a href="'.get_category_link($category->parent).'" class="back"><i class="icon-ios-arrow-thin-left"></i></a> '; 
}?>
        
 <h1>
<?php echo $parent; ?>      
<?php single_cat_title(''); ?></h1>
       
   
       
<?php  
$cid = $wp_query->get_queried_object_id();        
$sub_cats = get_categories( array(
	'child_of' => $cid,
	'hide_empty' => 0
) );
  if( $sub_cats ){
  echo '<div class="category_head-submenu"><ul>'; 
	foreach( $sub_cats as $cat ) { ?>
      
     <li><a href="<?php echo get_category_link( $cat->term_id ); ?>"><?php echo $cat->name; ?></a></li> 
        
 <?php } 
      echo '</ul></div>'; } ?>
        
    </div>
    
</div>

<div class="block">
   
   <div class="pure-g">
       <div class="pure-u-2-3">
   
    <div class="categories_posts">
    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

<div class="post_input">
   
    
    
    <div class="post_titel">
    <h4><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
    </div>
    <div class="post_date"><?php the_time('j F, Y | G:i'); ?></div>
    <div class="post_excerpt"><?php the_excerpt(); ?></div>
</div>

    <?php endwhile; else : ?>
    <?php endif; ?>
    </div>
  </div>
</div> 
   
 <?php  include(TEMPLATEPATH . '/template/uni/pagination.php'); ?>    
    
</div>