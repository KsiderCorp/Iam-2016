<div class="block">
    <div class="single_header">
        <h1><?php the_title(); ?></h1>
    </div>
    
<div class="single_wrap">
  <div class="single_discription">

    <div class="single-date descript_blc">
        <span>    <?php if( get_field('dates') ): the_field('dates');  else : endif; ?></span>
    </div>

    <div class="single-tax descript_blc">
 <a href="/conference/" class="back">Архив</a>
    </div>
    
    
</div> 
       
  <div class="pure-g">
      <div class="pure-u-2-3">
          
        <div class="single_content-exerpt lead">
            <?php the_excerpt(); ?>
        </div>          
<?php if( get_field('line1') ):?>	
<?php  the_field('line1'); ?>
<?php else : ?>
<?php endif; ?>	
    
    <div class="curent_conference-content">
        <?php the_content(); ?>
    </div>

   
      </div>
      <div class="pure-u-1-3">
          
          <div class="single_side">
              	<div class="timeline center">
		<?php the_field('download'); ?>
				</div>
         
         <div class="single_side-nav">
          <?php
             
$next_post = get_adjacent_post(0, '', 0);
if( $next_post )
	echo '<a href="'. get_permalink($next_post->ID) .'"><i class="icon-ios-arrow-thin-left"></i></a>';             
             
$prev_post = get_adjacent_post();
if( $prev_post )
	echo '<a href="'. get_permalink($prev_post->ID) .'"><i class="icon-ios-arrow-thin-right"></i></a>'; 
             
             ?>  
         </div>
          </div>
          
      </div>
  </div>       
 </div>    
</div>