<div class="workshop_list">
<?php 
$do_not_duplicate = array(); 
$arg = array( 
    'post_type' => 'science',
    'posts_per_page'=> 15,
    'post__not_in' => $do_not_duplicate,
    'order' => 'DESC',
    'post_status' => array( 'publish', 'future' ),
    'tax_query' => array(
		array(
			'taxonomy' => 'science_categories',
			'field' => 'slug',
			'terms' => $semterms
        )
    ),

);
$query = new WP_Query( $arg );
if ( $query->have_posts()) : while ( $query->have_posts() ) : $query->the_post(); 
$postdate = get_the_time( 'j F, Y', $post->ID ); 
$posttime = get_the_time( 'G:i', $post->ID ); 
$status = get_post_status();

$do_not_duplicate[] = $post->ID; 
 
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
 

<div class="workshop_list-block <?php echo $status; ?>">
 

 <div class="workshop_date">
     <?php echo $postdate; ?><br> <?php echo $autors; ?>   
 </div> 
 
 <div class="workshop_list-titel">
<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a> 
<span><?php the_excerpt(); ?></span>
 </div>
  
    
</div>  
 
 
 
    

<?php wp_reset_postdata(); ?>
<?php endwhile; else : ?>
<div class="continuum_archive-nonfound">
    Еще не было ни одного семинара. <a href="#page-form" class="scrollto">Регистрация.</a>
</div>
<?php endif; ?> 
</div>