<div class="block">
    <div class="tax_header">
        <h1>
          Экспериментальная база
        </h1>
        
       <div class="category_head-submenu">

            
<form action="javascript:void(null);" id="filterform">
    <input type="radio" id="termall" name="filtr" value="eqall" checked> <label for="termall">Все</label>
    <?php 
$args = array(
	'orderby'       => 'id', 
    'hierarchicals' => false,
	'order'         => 'ASC',
	'hide_empty'    => false, );  
$terms = get_terms('kindofuse', $args);
foreach ($terms as $term) {
echo '<input type="radio" id="term'.$term->term_id.'" name="filtr" value="'.$term->term_id.'" > <label for="term'.$term->term_id.'">'.$term->name.'</label>';}
?>
  </form>        
            
            
       </div>
            
    </div>
</div>


<div class="eqp_list-wrap" >
    <div class="block">
        
        <div class="pure-g" id="eqlist">
            
<?php 
query_posts($query_string . "&posts_per_page=-1");
if (have_posts()) : while (have_posts()) : the_post(); ?>   
<?php 
            $image = '';
        if( get_field('mainpic') ):
            $image = get_field('mainpic'); 
        else : 
            $image = '';
        endif; 
?>

 <div class="pure-u-1-4 pure-u-sm-1 pure-u-md-1-2 pure-u-lg-1-3 pure-u-xl-1-4 eqit eqall <?php if( has_term( '', 'kindofuse', $post->ID ) ){ $cur_terms = get_the_terms( $post->ID, 'kindofuse' ); foreach($cur_terms as $cur_term){ echo ' '.$cur_term->term_id.' ';};};  ?>">
   
<style>.eqp_img.id<?php the_ID(); ?> {background-image: url(<?php echo $image; ?>);  }   </style> 
   
    <div class="eqp">
        <div class="eqp_img id<?php the_ID(); ?>"></div>
        
        <div class="eqp_name">
            <h4><a href="<?php the_permalink(); ?>" class=""><?php the_title(); ?></a></h4>
        </div>
        
        <div class="eqp_exc">
           <?php the_excerpt(); ?> 
        </div>
           
            <div class="eqp_for">
            <?php 
    if( has_term( '', 'kindofuse', $post->ID ) ){
        $cur_terms = get_the_terms( $post->ID, 'kindofuse' );
        foreach($cur_terms as $cur_term){
            echo '<span>'.$cur_term->name.' </span>';
        };
    };  ?>
           </div>
           
    </div> 
    
 </div>
 
<?php endwhile; else : ?>
<?php endif; ?>                    
        </div>
        
        
    </div>
</div>


