<div class="block">
   
    <div class="category_head">
    
 <h1>Конференции</h1>
                                
    </div>
    
</div>


<div class="block">
    <div class="conference_wrap">
      
<?php 
$args = array( 
	'post_type'=>'conference',
	'posts_per_page' => 20, 
	'order'=> 'DESC',
	'orderby' =>'date', );
query_posts($args);
if (have_posts()) : while (have_posts()) : the_post(); ?>
    
<div class="conference_block <?php if ( get_field('confend') != true ) { echo ' current'; }?>">
         
          <div class="conferenc_titel">
<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>              
          </div>
          
          <div class="conference_date">
<?php if( get_field('dates') ): the_field('dates');  else : endif; ?>    
          </div>

          
      </div> 
       
<?php endwhile; else : ?>
<?php endif; ?>                
        
    </div>
    
   
    <div class="subscribe">
        <div class="mailchimp">


    <h4>Подписка</h4>


<div class="mfo clearfix">
<?php echo do_shortcode( '[mc4wp_form]' ); ?>
</div>

<div class="mchwhy mfo">
<p>После подтверждения подписки вы будете получать информацию о всех проводимых в ИПРИМ РАН конференциях.

Подписка осущетсвляется через сервис <a href="http://mailchimp.com">mailchimp</a></p>
</div>
</div>
    </div> 
    
</div>




