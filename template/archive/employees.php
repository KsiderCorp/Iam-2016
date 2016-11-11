<div class="block">
    <div class="emploees-head">
        <h1>Люди</h1>
    </div>
    
 <div class="front_menu">
  <ul class="nav ">
        <li><a href="#admin" class="scrollto">Администрация</a></li>
        <li><a href="#boss" class="scrollto">Руководители подразделений</a></li>
		<li><a href="#emp" class="scrollto">Сотрудники</a></li>
     </ul>

</div>
   
</div>    
   
    
<?php 
$hboss = array( 
'post_type'=>'employees',
'emptype' =>  'admpack', 
'emptype' =>  'hightboss', 
'posts_per_page' => 3, 
'orderby'=> 'date',
'order'=> 'DESC' );

$admin = array( 
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
'order'=> 'DESC', ); 

?>
   

   
<div class="front-page_admines">
    <div class="block">
     
<div class="pure-g">
<div class="pure-u-1">
<h3 id="admin">Администрация</h3>

</div>

<?php $postslist = get_posts( $hboss );  
foreach ($postslist as $post) :  setup_postdata($post);?>

<div class="pure-u-1-3">
<?php include(TEMPLATEPATH . '/template/uni/persone_card.php'); ?>
</div>
<?php wp_reset_postdata(); ?>
<?php endforeach; ?>
</div>
                   
              

<div class="pure-g">

    <?php $postslist = get_posts( $admin );  
foreach ($postslist as $post) :  setup_postdata($post);?>
        <div class="pure-u-1-5 pure-u-sm-1">
        
<?php include(TEMPLATEPATH . '/template/uni/persone_card.php'); ?>
        </div>
<?php wp_reset_postdata(); ?>
<?php endforeach; ?>

</div> 
                       
    </div>
</div>  
  
 <?php 
$zavlab = array( 
'post_type'=>'employees',
'emptype' =>  'boss', 
'posts_per_page' => 6, 
'orderby'=> 'date',
'order'=> 'DESC' );

$employ = array( 
	'tax_query' => array(
		'relation' => 'AND',
		array(
			'taxonomy' => 'emptype',
			'field' => 'slug',
			'terms' => 'hightboss',
			'operator' => 'NOT IN',
		),
		array(
			'taxonomy' => 'emptype',
			'field' => 'slug',
			'terms' => 'admpack',
			'operator' => 'NOT IN',
		),
		array(
			'taxonomy' => 'emptype',
			'field' => 'slug',
			'terms' => 'boss',
			'operator' => 'NOT IN',
		),
	),
'post_type'=>'employees',
'posts_per_page' => -1, 
'exclude'        => '29',    
'orderby'=> 'rand',
'order'=> 'ASC', ); 

?>   
        
    
<div class="front-page_admines">
    <div class="block">
       <h3 id="boss">Руководители отделов и лабораторий</h3>      

<div class="pure-g">
  
    <?php $zavl = get_posts( $zavlab );  
foreach ($zavl as $post) :  setup_postdata($post);?>
        <div class="pure-u-1-6 pure-u-sm-1">
        
<?php include(TEMPLATEPATH . '/template/uni/persone_card.php'); ?>
        </div>
<?php wp_reset_postdata(); ?>
<?php endforeach; ?>

</div> 
                       
    </div>
</div>



<div class="all_emploee">
    <div class="block">

      <h3 id="emp">Сотрудники</h3>
       
       
        <div class="employ-filtr">
            <div class="category_head-submenu">   
        <form action="javascript:void(null);" id="filterform">
        
        <input type="radio" id="termall" name="filtr" value="eqall" checked> <label for="termall">Все</label>
        
<?php $lablist = get_posts( 'post_type=units' );  
foreach ($lablist as $post) :  setup_postdata($post);?>
     
      <input type="radio" id="<?php echo $post->post_name; ?>" name="filtr" value="<?php echo $post->post_name; ?>">
      <label for="<?php echo $post->post_name; ?>"><?php the_title(); ?></label>  
        
<?php wp_reset_postdata(); ?>
<?php endforeach; ?>
           
    <input type="radio" id="nosc" name="filtr" value="nonescience" checked>
    <label for="nosc">Не научные должности</label>
            </form> 
        </div>         
        </div>
        
        <div class="employ-list">

 <div class="pure-g"  id="eqlist">
  
<?php $emp = get_posts( $employ );  
foreach ($emp as $post) :  setup_postdata($post);
 
if( has_term( '', 'emptype', $post->ID ) ){ 
$depart = get_the_terms( $post->ID, 'emptype' );
$dep_id = array();
foreach($depart as $depart_term){
    $dep_id[] = $depart_term->slug;}
}
     
     ?>
        <div class="pure-u-1-6 pure-u-sm-1  eqit <?php echo implode(" ", $dep_id); ?> eqall">
        
<?php include(TEMPLATEPATH . '/template/uni/persone_card.php'); ?>
        </div>
<?php wp_reset_postdata(); ?>
<?php endforeach; ?>

</div>     
            
        </div>
    </div>
</div>