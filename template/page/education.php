<div class="block">
    <div class="education_head">
        <h1>
        Образование 
        </h1>
        
    </div>
    
    <div class="education_mai">
    
   <h2>
      <span>Московский</span><br>
       <span>авиационный институт</span><br>
       <span class="base">(Базовая кафедра)</span>
   </h2> 
<div class="single_discription">
 
    
<div class="single-tax descript_blc">

<?php 
$args = array( 
    'post_type'=>'employees',
    'include' => 559,
    'posts_per_page' => 1,);
$postslist = get_posts( $args );  
foreach ($postslist as $post) :  setup_postdata($post);

$image = '';  
if( get_field('photo') ):
$attachment_id = get_field('photo');
$size = "thumbnail";
$image = wp_get_attachment_image_src( $attachment_id, $size );
else :
  $image = get_bloginfo("template_url").'/img/emploers/yo.svg';
endif; ?>	

<div class="man_strok">

<style>.man_face.id-<?php the_ID(); ?> {background-image: url(<?php echo $image[0]; ?>);}</style>
   
    <div class="man_face id-<?php the_ID(); ?>">
      &nbsp;  
    </div>
    <div class="man_cont">
        
        <div class="man_name">
           
<div>Заведующий кафедрой:</div>
<a href="<?php the_permalink(); ?>" class="card_link post-link" data-id="<?php the_ID(); ?>" rel="<?php the_ID(); ?>"  data-link="<?php echo home_url();?>/ajaxloader/"><?php the_title(); ?></a> 
<?php if( current_user_can('administrator') ){  echo get_the_ID();  } ?> 

       <div class="man_pos">
<?php if( get_field('position') ): the_field('position'); else : echo ''; endif; ?>, <?php if( get_field('rank') ): the_field('rank'); else : echo ''; endif; ?>
           </div>
           
       </div>
    </div>
</div>   

<?php wp_reset_postdata(); endforeach; ?> 

</div>
    
</div>
          
       
  <div class="pure-g">
      <div class="pure-u-2-3">
      
<p>
<?php if( get_field('bak') ): the_field('bak'); else : echo 'Базовая кафедра'; endif; ?>  </p>          
<?php 
    if( get_field('nokimg') ):
$attachment_id = get_field('nokimg');
$size = "full";
$image = wp_get_attachment_image_src( $attachment_id, $size ); 
?>
<style>
.single_image { background-image: url(<?php echo $image[0]; ?>); }
</style>
 <div class="single_image"> &nbsp;</div> 
<?php else : endif; ?>            
      </div>
      
 <div class="pure-u-1-3">

                                         
 <div class="education_side">               
 
  
<?php 
$rel = get_field('rel');
if( $rel ): ?>

<div class="related_posts">
	<ul>
	<?php foreach( $rel as $p ): // variable must NOT be called $post (IMPORTANT) ?>
    <?php setup_postdata($post); ?>
	    <li>
	    	<a href="<?php echo get_permalink( $p->ID ); ?>"><?php echo get_the_title( $p->ID ); ?></a>
	    </li>
	<?php wp_reset_postdata(); ?>    
	<?php endforeach; ?>
	</ul>
	
	
</div>

<?php endif; ?>
 </div>                          


         
           
</div>

</div>                   
        
    </div>


   <div class="education_noc">
   
   <div class="pure-g">
       <!--<div class="pure-u-1-3"></div>-->
       <div class="pure-u-2-3">
<h3>Научно-образовательный центр</h3>

<?php if( get_field('nok') ): the_field('nok'); else : echo 'все:('; endif; ?>   
       </div>
   </div>
   

    
    </div>
</div>