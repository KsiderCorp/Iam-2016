<?php
/*
Template Name: Conference Info

Template Post Type: post, page
*/
get_header(); ?>


<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

<div class="block">
    <div class="single_titel">
        <h1><?php the_title(); ?></h1>
    </div>
 
   
<div class="conference_discription">

   <div class="single-date descript_blc">
<span><?php if( get_field('date') ): the_field('date'); else : endif; ?>	   </span>
   </div>

</div>
 
  <!--основные условия-->
  
<div class="conference_main">
    <div class="pure-g">
        <div class="pure-u-2-3">
           
    <div class="conference_content">
<!--    <p><?php the_excerpt(); ?></p>
<?php if( get_field('postphoto') ):
    $image = get_field('postphoto'); ?>
<style>
.single_image { background-image: url(<?php echo $image; ?>); }
</style>
 <div class="single_image"> &nbsp;  </div> 
<?php else : endif; ?>  -->
      
    <?php the_content(); ?>            
    </div>       
             
        </div>
        
        <div class="pure-u-1-3">
        
        <div class="conderence_side">
        
        
<div class="main-mdate">
   <a href="<?php if( get_field('reglink') ): the_field('reglink'); else : endif; ?>"><span>Регистрация <i class="icon-ios-arrow-right"></i></span></a>
   
   <?php if( get_field('dates') ): the_field('dates'); else : endif;  ?>
</div> 

       
           
            
        </div>  
              
        </div>
    </div>

<div class="conference_path">
    <?php if( get_field('b1') ): the_field('b1'); else : endif;  ?> 
 </div>       
    
</div>                                   
  
 <!--Орг. Комитеты-->  
<div class="conference_cometee">
   <div class="pure-g">
      <div class="pure-u-1">
          <h2>Организационный комитет</h2>
      </div>
       <div class="pure-u-1-2">
           <div class="cometee cometee_left">
               <?php if( get_field('b3') ): the_field('b3'); else : endif;  ?>
           </div>
       </div>
       <div class="pure-u-1-2">
           <div class="cometee cometee_right">
             <?php if( get_field('b4') ): the_field('b4'); else : endif;  ?> 
             <hr>
             <?php if( get_field('b5') ): the_field('b5'); else : endif;  ?>  
           </div>
       </div>
   </div>
     
    
</div> 

<!-- правила--> 
 
<div class="conference_rules">
   <?php if( get_field('b2') ): the_field('b2'); else : endif;  ?> 
</div>  
  
                                                                          
</div>








<?php endwhile; else : ?>
<?php endif; ?>

<?php get_footer(); ?>