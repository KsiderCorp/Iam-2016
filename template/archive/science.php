
<?php 
$i = 0;
$args = array(  
    'posts_per_page' => 10,   
    );
query_posts( array_merge( $wp_query->query, $args) );
if (have_posts()) : while (have_posts()) : the_post();
        $i++; 

$postdates = get_the_time( 'j M, Y', $post->ID ); 
$posttime = get_the_time( 'G:i', $post->ID ); 

$image = '';
if( get_field('mainpic') ): 
    $attachment_id = get_field('mainpic'); 
    $size = "full";
    $image = wp_get_attachment_image_src($attachment_id, $size );
else : 
    $image[0] = 'https://source.unsplash.com/1600x900/?nature,water'; 
endif; 

$cur_terms = get_the_terms( $post->ID, 'science_authors' );
$autors = ' ';
foreach ($cur_terms as $cur_term) {
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


if ($i==1 && !is_paged()) { ?>

<?php include(TEMPLATEPATH . '/template/archive/science/baner_one.php'); ?>

<?php } 
elseif( $i > 1 && $i < 6 && !is_paged() ){ 

if ($i==2) {
    include(TEMPLATEPATH . '/template/archive/science/nav.php');
    echo '<div class="block"><div class="science_picblock-wrap">';}
?>

<?php include(TEMPLATEPATH . '/template/archive/science/line_two.php'); ?>

<?php 
if ($i==5) {echo '</div></div>';}                          
} 
else { ?>

<?php include(TEMPLATEPATH . '/template/archive/science/post.php'); ?>

<?php } ?>
     

<?php endwhile; else : ?>
<?php endif; ?>

 <div class="block">
     <?php  include(TEMPLATEPATH . '/template/uni/pagination.php'); ?>  
 </div>       
 