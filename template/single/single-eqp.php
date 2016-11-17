<div class="block">
    
   
    <div class="single_titel">
        <h1><?php the_title(); ?></h1>
    </div>

<div class="single_wrap">
   
<div class="pure-g">   

<div class="pure-u-2-3">
                              
        <div class="single_content">
            
   

 <div class="laboratory">
<ul>	
<?php 
    $labid = '';
$units = get_the_terms( $post->ID, 'eqlab' );

foreach( $units as $unit ){
    $labid = $unit->slug;   
    }      
      
$ua = array( 
    'post_type' => 'units', 
    'name' => $labid, 
    'pagename' => $labid, 
    'posts_per_page' => -1, 
    'order'=> 'ASC',);
$unitlist = get_posts( $ua );
    
foreach ($unitlist as $post) :  setup_postdata($post); ?>

<li>
    <i class="icon-ios-flask-outline"></i> <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
</li>

<?php wp_reset_postdata(); ?>
<?php endforeach;  ?>

</ul>
 </div>         
           
        <div class="single_content-exerpt lead">
            <?php the_excerpt(); ?>
        </div>                              
                    
        <div class="single_content-block">
            <?php the_content(); ?>
        </div>
            
        </div> 
               
<div class="imglab">
<?php if( get_field('labphoto') ):?>
    <?php the_field('labphoto'); ?>
<?php elseif( get_field('expphoto') ):?>
    <?php the_field('expphoto'); ?>
<?php else : ?>
<?php endif; ?>
</div>  
                
</div>
   
 <div class="pure-u-1-3">
     <div class="single_side">
         
        <div class="mainpic">
            <?php if( get_field('mainpic') ):?>
<img src="<?php the_field('mainpic'); ?>"  class="logotext">
            <?php else : ?>
            <?php endif; ?> 
        </div>
    
    <div class="feedback">
        <a href="mailto:info@iam.ras.ru">info@iam.ras.ru</a>
    </div>
    
     </div>
 </div>

</div>     
    
</div>



</div> 








