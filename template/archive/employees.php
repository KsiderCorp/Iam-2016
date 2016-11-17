<?php 
$hboss = array( 
'post_type'=>'employees',
'emptype' =>  'admpack', 
// 'emptype' =>  'hightboss', 
'posts_per_page' => -1, 
'orderby'=> 'date',
'order'=> 'DESC' );
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
 

   
<div class="front-page_admines">
    <div class="block">

        <div class="pure-g">
           

            <div class="pure-u-2-3">
<div class="man_block-head"> 
            <h2 id="admin">Администрация</h2>
</div>

 <?php $postslist = get_posts( $hboss );  
foreach ($postslist as $post) :  setup_postdata($post);?>

<?php include(TEMPLATEPATH . '/template/uni/persone_strok.php'); ?>

<?php wp_reset_postdata(); ?><?php endforeach; ?>

            </div>
        </div>
    </div>
</div> 
        
    
<div class="front-page_admines">
    <div class="block">
    
<div class="pure-g">
  
  <div class="pure-u-2-3">
 
<div class="man_block-head">   
  <h2 id="boss">Руководители отделов и лабораторий</h2>  
</div> 
 
<?php $zavl = get_posts( $zavlab );  
foreach ($zavl as $post) :  setup_postdata($post);?>
        
<?php include(TEMPLATEPATH . '/template/uni/persone_strok.php'); ?>
        
<?php wp_reset_postdata(); ?>
<?php endforeach; ?>

  </div>

</div> 
                       
    </div>
</div>



<div class="all_emploee">
   <div class="block">
      
<div class="pure-g">
    <div class="pure-u-2-3">
    
    <div class="man_block-head">
        <h2 id="emp">Сотрудники <!--<a href="">&#43;</a>--></h2>
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
           
    <input type="radio" id="nosc" name="filtr" value="nonescience">
    <label for="nosc">Не научные должности</label>
            </form> 
        </div>         
        </div>
    </div>     
        <div class="employ-list">

 <div id="eqlist">
  
<?php $emp = get_posts( $employ );  
foreach ($emp as $post) :  setup_postdata($post);
 
if( has_term( '', 'emptype', $post->ID ) ){ 
$depart = get_the_terms( $post->ID, 'emptype' );
$dep_id = array();
foreach($depart as $depart_term){
    $dep_id[] = $depart_term->slug;}}
?>
<div class="eqit <?php echo implode(" ", $dep_id); ?> eqall">    
<?php include(TEMPLATEPATH . '/template/uni/persone_strok.php'); ?>
</div>
<?php wp_reset_postdata(); ?>
<?php endforeach; ?>

</div>     
            
        </div>
    
    </div>
</div> 
   
    </div>
</div>