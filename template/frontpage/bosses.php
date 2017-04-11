<?php 
$hboss = array( 
'post_type'=>'employees',
'emptype' =>  'admpack', 
'posts_per_page' => -1, 
'orderby'=> 'modified',
'order'=> 'DESC' );
?>
  
<div class="front-page_admines">
    <div class="block">
     
<div class="pure-g">
<div class="pure-u-1">
<h2 class="center">Администрация</h2>

</div>

<?php $postslist = get_posts( $hboss );  
foreach ($postslist as $post) :  setup_postdata($post);?>

<div class="pure-u-1-2 pure-u-sm-1-2 pure-u-md-1-8">
<?php include(TEMPLATEPATH . '/template/uni/persone_card.php'); ?>
</div>
<?php wp_reset_postdata(); ?>
<?php endforeach; ?>
</div>
                   
              

<div class="pure-g">


</div> 
                       
    </div>
</div>