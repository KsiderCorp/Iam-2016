<div class="block">
    <div class="category_head">
        

        <h1><?php single_cat_title(''); ?></h1>
        
        <?php echo '<p class="lead">'.term_description().'</p>'; ?>
        
    </div>
    
</div>

<div class="block">
   
   <div class="pure-g">
       <div class="pure-u-2-3">
   
<div class="categories_posts">
 <?php if (have_posts()) : while (have_posts()) : the_post(); 
    if( !in_category('hired') ):
    ?>

<div class="post_input">

    <div class="post_titel">
        <a href="<?php the_permalink(); ?>"><h4><?php the_title(); ?></h4></a>
    </div>

    <div class="post_date">
        <?php the_time('d.m.Y '); ?>
     </div>

</div>
<?php else : ?> 

<div class="post_input">

    <div class="post_titel">
        <h4>(Закрыто) <?php the_title(); ?></h4>
        
    </div>

    <div class="post_date">
        <?php the_time('d.m.Y '); ?>
     </div>

</div>

<?php  endif; endwhile; else : ?>

Пока ничего нет

<?php endif; ?>
 
</div>
  </div>
  
  
  <div class="pure-u-1-3">
<div class="laws">

<ul>
<li><a href=".pdf">Положение о проведение конкурса на замещение должностей научных работников</a></li>
</ul>

</div>
  </div>
  
</div>  
  <?php  include(TEMPLATEPATH . '/template/uni/pagination.php'); ?>    
</div>