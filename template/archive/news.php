<div class="block">
    <div class="category_head">
        

        <h1><?php single_cat_title(''); ?></h1>
       
    <?php 
//    global $wp_query;
//    $category = $wp_query->get_queried_object();
    $cid = $wp_query->get_queried_object_id();    
    if ( !empty($cid->parent) ) {
    echo "("; echo get_cat_name($cid->parent); echo ")"; 
    }?>       
       
          <?php  
       
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
  
  
  <div class="pure-u-1-3">
      <div class="fano_rss">	 
<h4>Новости из ФАНО</h4>
<?php 
include_once(ABSPATH . WPINC . '/feed.php');
$rss = fetch_feed('http://fano.gov.ru/ru/press-center/rss/index.php');

if( !is_wp_error( $rss ) ){
	$maxitems = $rss->get_item_quantity(8); 
	$rss_items = $rss->get_items(0, $maxitems); 
}
?>

<ul>
	<?php 
	if( $maxitems == 0 ) 
		echo '<li><i class="icon-body-cut"></i></li>';
	else
	foreach ( $rss_items as $item ){ ?>
		<li>
		
<span>
<?php echo $item->get_date('j F, Y'); ?>
</span>

<a href='<?php echo esc_url( $item->get_permalink() ); ?>'>
<?php echo esc_html( $item->get_title() ); ?>
</a>
		</li>
	<?php } ?>
</ul>
</div>
  </div>
  
</div>  
    
</div>