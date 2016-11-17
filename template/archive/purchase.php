<div class="block">
    <div class="category_head">
        

        <h1><?php single_cat_title(''); ?></h1>
        
    </div>
    
</div>

<div class="block">
   
   <div class="pure-g">
       <div class="pure-u-2-3">
   
    <div class="categories_posts">
    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

<div class="post_input">
   
    
    
    <div class="post_titel">
    <h4>
    
    <?php the_title(); ?>
    
    </h4>
    </div>
    <div class="post_date"><?php the_time('d.m.Y '); ?> <?php if( in_category('purchasend') ): echo('(завершено)'); else : echo ''; endif; ?></div>
    <div class="purchase_num">
 № <a href="<?php if( get_field('link') ): the_field('link'); else : echo '#'; endif; ?>"><?php if( get_field('num') ): the_field('num'); else : echo '#'; endif; ?></a>
    </div>
</div>

    <?php endwhile; else : ?>
    <?php endif; ?>
    </div>
  </div>
  
  
  <div class="pure-u-1-3">
<div class="laws">
<h4>Законы:</h4>
<ul>

<li><a href="http://www.rg.ru/2011/07/22/zakupki-dok.html"> ФЗ №223-ФЗ</a></li>
<li><a href="http://www.rg.ru/2013/04/12/goszakupki-dok.html"> ФЗ №44-ФЗ</a></li>

<li><a href="http://zakupki.gov.ru/epz/main/public/document/view.html">Портал госзакупок</a></li>

</ul>
</div>
  </div>
  
</div>  
  <?php  include(TEMPLATEPATH . '/template/uni/pagination.php'); ?>    
</div>