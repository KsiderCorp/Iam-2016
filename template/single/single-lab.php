<div class="block">
    
    <div class="single_titel">
        <h1><?php the_title(); ?></h1>
    </div>
    
    <div class="single_wrap">
        
<div class="single_discription">
<hr>
</div>
        
        <div class="pure-g">
            <div class="pure-u-2-3">
                              
        <div class="single_content">
            
        <div class="single_content-exerpt lead">
            <?php the_excerpt(); ?>
        </div>     
        
<?php if( get_field('topimg') ):
    $image = get_field('topimg'); ?>
<style>
.single_image { background-image: url(<?php echo $image; ?>); }
</style>
 <div class="single_image"> &nbsp;  </div> 
<?php else : endif; ?>                   
                    
        <div class="single_content-block">
            <?php the_content(); ?>
        </div>
            
        </div> 
                
            </div>
            
            <div class="pure-u-1-3">
                
                <div class="single_side laboratory">
                
<div class="lab_boss">
     <?php 
$labid = $post->post_name;
if(has_term( 'sunits', 'kind', $post->ID ) ){
$bossterm = 'boss';}
else {$bossterm = 'specboss';}

$args = array( 
	'tax_query' => array(
		'relation' => 'AND',
		array(
			'taxonomy' => 'emptype',
			'field' => 'slug',
			'terms' => $labid ,
		),
		array(
			'taxonomy' => 'emptype',
			'field' => 'slug',
			'terms' => $bossterm,
			'operator' => 'AND',
		),
	),
'post_type'=>'employees',
'posts_per_page' => 1, 
'order'=> 'ASC', );
$postslist = get_posts( $args );  
foreach ($postslist as $post) :  setup_postdata($post);?>

<?php include(TEMPLATEPATH . '/template/uni/persone_card.php'); ?>

<?php wp_reset_postdata(); ?>
<?php endforeach; ?>   

</div>               
               
               
               
 <div class="lab_equipment">
    <ul>	

<?php $args = array( 'post_type'=>'equipment', 'eqlab' => $labid , 'posts_per_page' => -1, 'order'=> 'ASC', );
$postslist = get_posts( $args );
 if ($postslist) {
  echo '<h4>Оборудование отдела</h4>';      
foreach ($postslist as $post) :  setup_postdata($post);?>
<li><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>

<?php wp_reset_postdata(); ?>
<?php endforeach; } ?>

</ul> 
 </div>              
                </div>
                
            </div>
        </div>
        
        
    </div>
    
    
    
</div>

<div class="laboratory_persones">
    <div class="block">
    <div class="pure-g">
       
<?php 
$labid = $post->post_name;
$args = array( 
	'tax_query' => array(
		'relation' => 'AND',
		array(
			'taxonomy' => 'emptype',
			'field' => 'slug',
			'terms' => $labid ,
		),
		array(
			'taxonomy' => 'emptype',
			'field' => 'slug',
			'terms' => $bossterm,
			'operator' => 'NOT IN',
		),
	),
'post_type'=>'employees',
'posts_per_page' => -1, 
'orderby'=> 'title',
'order'=> 'ASC', );
$postslist = get_posts( $args );  
foreach ($postslist as $post) :  setup_postdata($post);?>

<div class="pure-u-1-5">
<?php include(TEMPLATEPATH . '/template/uni/persone_card.php'); ?>
</div>
<?php wp_reset_postdata(); ?>
<?php endforeach; ?>   
         
    </div>
    </div>
</div>

<?php if( get_field('public') ):?>
<div class="laboratory_other">
    <div class="block">
       <div class="other_inform">
        <label for="openhide"><i class="icon-chevron-down"></i></label><input type="checkbox" name="openhide" id="openhide">
        
        <div class="openhide">

<?php the_field('public'); ?>
   
        </div>
       </div> 
    </div>
</div>

<?php else : ?>
<?php endif; ?> 
