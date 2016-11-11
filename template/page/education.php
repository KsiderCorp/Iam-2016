<div class="block">
    <div class="education_head">
        <h1>
        Образование
        </h1>
        <div class="category_head-submenu">
        <ul>
        <li><a href="/postgraduate/">Аспирантура</a></li>
        </ul>
        </div>
        
    </div>
    
    <div class="education_mai">
    
   <h2>
      <span>Московский</span><br>
       <span>авиационный институт</span><br>
       <span class="base">(Базовая кафедра)</span>
   </h2> 
      
<?php if( get_field('bakimg') ):
$attachment_id = get_field('bakimg');
$size = "large";
$imagenok = wp_get_attachment_image_src( $attachment_id, $size );?>
<style>
    
</style>
<?php else : endif; ?>   
       
  <div class="pure-g">
      <div class="pure-u-2-3">
      
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
      
<p>
<?php if( get_field('bak') ): the_field('bak'); else : echo 'Базовая кафедра'; endif; ?>  </p>            
          
      </div>
      <div class="pure-u-1-3">
         
         <div class="education_side">
             <div class="lab_boss">
  
<?php 
$args = array( 
'post_type'=>'employees',
'include' => 559,
'posts_per_page' => 1,);
$postslist = get_posts( $args );  
foreach ($postslist as $post) :  setup_postdata($post);?>                              
                  <?php include(TEMPLATEPATH . '/template/uni/persone_card.php'); ?>
<?php wp_reset_postdata(); ?>
<?php endforeach; ?>                   
             </div>
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