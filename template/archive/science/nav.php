<div class="block">
<div class="science_navigation">
<ul>
<?php
$terms = get_terms( 'science_categories', array('parent' => 0, 'hierarchical' => 0, 'hide_empty' => 1 ) );
foreach ( $terms as $term ){    
    $tid =  $term->term_id; 
    $termname = 'science_categories';
    $image = '';   
if( get_field('photo', 'science_categories_'.$tid) ):
    $attachment_id = get_field('photo', 'science_categories_'.$tid);
    $size = "medium";
    $image = wp_get_attachment_image_src( $attachment_id, $size );
else : endif;  
    $termname = $term->name;
    $termlink = get_term_link( $term );
?>

<li class="coID i<?php echo $tid;?>">
<a href="<?php echo $termlink;?>"><span><?php echo $termname;?></span></a>
</li>

<?php  } ?> 

</ul>    
</div> 
</div>