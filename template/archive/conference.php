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
    
   

    
</div>


<div id="addpoupup">
    <div class="subscribe" id="">
<div class="mailchimp">


    <h4>Подписка</h4>


<!--<div class="mfo clearfix">
<?php // echo do_shortcode( '[mc4wp_form]' ); ?>
</div>-->

<div class="mfo">

<!-- Begin MailChimp Signup Form -->
<!-- Begin MailChimp Signup Form -->

<div id="mc_embed_signup">
<form action="//velocardan.us8.list-manage.com/subscribe/post?u=aaba03a25f970b880add15f84&amp;id=4e31ee73d2" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>
    
<div class="mc_embed_signup_scroll">

<div style="position: absolute; left: -5000px;" aria-hidden="true"><input type="text" name="b_aaba03a25f970b880add15f84_4e31ee73d2" tabindex="-1" value=""></div>
	
	<label for="mce-EMAIL">Email Address </label>
	<input type="email" value="" name="EMAIL" class="required email" id="mce-EMAIL" placeholder="newton@london.co.uk">
    <input type="submit" value="Отправить" name="subscribe" id="mc-embedded-subscribe" class="button">
    
</div>
</form>
</div>

<!--End mc_embed_signup-->
<!--End mc_embed_signup-->

</div>


<div class="mchwhy mfo">
<p>После подтверждения подписки вы будете получать информацию о всех проводимых в ИПРИМ РАН конференциях.

Подписка осущетсвляется через сервис <a href="http://mailchimp.com">mailchimp</a></p>
</div>
</div>
    </div> 
</div>