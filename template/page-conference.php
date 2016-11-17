<?php
/*
Template Name: Conference Info
*/
get_header(); ?>
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
<div class="block">
    
    <div class="single_titel">
        <h1><?php the_title(); ?></h1>
    </div>
    
    <div class="single_wrap">
        
<div class="single_discription">

    <div class="single-date descript_blc">
        <span>
  <?php if( get_field('date') ): the_field('date'); else : endif;  ?>	          
        </span>
    </div>

    <div class="single-tax descript_blc">
<a href="<?php if( get_field('reglink') ): the_field('reglink'); else : endif; ?>">Регистрация</a>
    </div>
    
    
</div>
        
<div class="pure-g">
            <div class="pure-u-2-3">
                               
        <div class="single_content">
            
        <div class="single_content-exerpt lead">
            <?php the_excerpt(); ?>
        </div>     
        
<?php if( get_field('postphoto') ):
    $image = get_field('postphoto'); ?>
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
               <div class="single_side">
               
<div class="conf-info-mdate">
    <?php if( get_field('dates') ): the_field('dates'); else : endif;  ?>
</div>

                               
<div class="rek">
<div class="likely likely-small" data-single-title="Поделиться">
<div class="facebook" title="Поделиться ссылкой на Фейсбуке"></div>
<div class="twitter" title="Поделиться ссылкой в Твиттере"></div>
<div class="vkontakte" title="Поделиться ссылкой во Вконтакте"></div>
<div class="gplus" title="Поделиться ссылкой в Гугл-плюсе"></div>
</div>
</div>                               	              	              
                                
               </div>
            </div>
        </div>
        
 <!--Комитеты-->  
         
	<div class="pure-g">
        <div class="pure-u-1 center"><h3>Организационный комитет</h3></div>
		<div class="pure-u-1-2">
			<div class="conf-info-terms">
<?php if( get_field('b3') ): the_field('b3'); else : endif;  ?>
			</div>
		</div>
		<div class="pure-u-1-2">
		<div class="conf-info-members">
		<div class="pure-g">
		<div class="pure-u-1">
			<div class="conf-info-terms">
<?php if( get_field('b4') ): the_field('b4'); else : endif;  ?>
			</div>
		</div>
			
		<div class="pure-u-1">
			<div class="conf-info-terms">
<?php if( get_field('b5') ): the_field('b5'); else : endif;  ?>
			</div>
		</div>
		</div>
		</div>
		</div>
	</div>
  
 
  <!--Условия-->                                                                                                         
   <hr>                         
  <div class="pure-g">
     
      <div class="pure-u-2-3">
          	<div class="conf-info-terms">
<?php if( get_field('b2') ): the_field('b2'); else : endif;  ?>
			</div>
      </div>
      
      <div class="pure-u-1-3">
         
          <div class="single_side">
              <div class="rek">
    <a href="#rek" class="popup-with-move-anim ">Реквизиты</a>
    <div id="rek" class="zoom-anim-dialog white-popup mfp-hide">
        <?php if( get_field('rekv') ): the_field('rekv'); else : endif;  ?>
    </div>
</div>

<div class="rek">
    <a href="#rules" class="popup-with-move-anim">Правила оформления</a>
    <div id="rules" class="zoom-anim-dialog white-popup mfp-hide">
        <?php if( get_field('rules') ): the_field('rules'); else : endif;  ?>
    </div>
</div>
          </div> 
          
      </div>
  </div>                          
                             
          
    </div>
</div>


<?php endwhile; else : ?>
<?php endif; ?>

<?php get_footer(); ?>