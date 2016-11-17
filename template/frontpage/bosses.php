<?php 
$hboss = array( 
'post_type'=>'employees',
'emptype' =>  'admpack', 
// 'emptype' =>  'hightboss', 
'posts_per_page' => -1, 
'orderby'=> 'modified',
'order'=> 'DESC' );

/*$admin = array( 
	'tax_query' => array(
		'relation' => 'AND',
		array(
			'taxonomy' => 'emptype',
			'field' => 'slug',
			'terms' => 'admpack' ,
		),
		array(
			'taxonomy' => 'emptype',
			'field' => 'slug',
			'terms' => 'hightboss',
			'operator' => 'NOT IN',
		),
	),
'post_type'=>'employees',
'posts_per_page' => -1, 
'orderby'=> 'date',
'order'=> 'DESC', );*/ 

?>
   

   
<div class="front-page_admines">
    <div class="block">
     
<div class="pure-g">
<div class="pure-u-1">
<h2 class="center">Администрация</h2>

</div>

<?php $postslist = get_posts( $hboss );  
foreach ($postslist as $post) :  setup_postdata($post);?>

<div class="pure-u-1-4">
<?php include(TEMPLATEPATH . '/template/uni/persone_card.php'); ?>
</div>
<?php wp_reset_postdata(); ?>
<?php endforeach; ?>
</div>
                   
              

<div class="pure-g">


</div> 
                       
    </div>
</div>