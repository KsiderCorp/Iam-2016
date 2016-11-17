<div class="card_wrap">
    
<?php 
  $image = '';  
if( get_field('photo') ):

$attachment_id = get_field('photo');
$size = "medium"; // (thumbnail, medium, large, full or custom size)
$image = wp_get_attachment_image_src( $attachment_id, $size );
else :
  $image = get_bloginfo("template_url").'/img/emploers/yo.svg';
endif; ?>	
    
<style>
.card_pic.id-<?php the_ID(); ?> {
background-image: url(<?php echo $image[0]; ?>);}
</style>
     
<div class="card_pic id-<?php the_ID(); ?>"></div>
    
    <div class="card_desct">
      <div class="card_position">
      
<?php if( get_field('position') ): the_field('position'); else : echo ''; endif; ?><br>
<?php if( get_field('rank') ): the_field('rank'); else : echo ''; endif; ?>        
      </div>
      
      <div class="card_name">
<a href="<?php the_permalink(); ?>" class="card_link post-link" data-id="<?php the_ID(); ?>" rel="<?php the_ID(); ?>"  data-link="<?php echo home_url();?>/ajaxloader/"><?php the_title(); ?></a> 
     <?php if( current_user_can('administrator') ){  echo get_the_ID();  } ?>     
      </div> 
    </div>
</div>