<?php 
$args = array(
'page_id' => $_POST['getpost'],
'post_type' => 'any'
);
query_posts($args);
if (have_posts()) : while (have_posts()) : the_post(); 



$image = '';
if( get_field('photo') ):

    $attachment_id = get_field('photo');
    $size = "full";
    $image = wp_get_attachment_image_src( $attachment_id, $size);

elseif (get_field('cover')) :

    $image[0] = get_field('cover');

elseif (get_field('postphoto')) :

    $image[0] = get_field('postphoto');

else :

    $image[0] = bloginfo("template_url").'/img/emploers/yo.svg';

endif; 

?>


<div class="side-toggle_wrap">
   
   <span class="sitback"><i class="icon-ios-close-empty"></i></span>
   
    <div class="portrait">
<a href="<?php echo $image[0]; ?>"><img src="<?php echo $image[0]; ?>" alt=""> </a> 
    </div>
    
    <div class="name">
        <a href="<?php the_permalink(); ?>" ><?php the_title(); ?> </a> 
    </div>
  
<?php if(is_singular('employees') ) : ?>    
<div class="position">
<?php if( get_field('position') ): the_field('position'); else : echo 'Должность'; endif; ?>,<br>
<?php if( get_field('rank') ): the_field('rank'); else : echo ''; endif; ?><br>
</div>    
  
  
<div class="side-toggle_contacts">

    <?php if( get_field('phone') ):?>
    <a href="tel:<?php the_field('phone'); ?>" class="peepcontl"><?php the_field('phone'); ?></a>
    <?php else : endif; ?>	

    <?php if( get_field('email') ):?>
    <a href="mailto:<?php the_field('email'); ?>" class="peepcontl"><?php the_field('email'); ?></a>
    <?php else : endif; ?> 

</div> 
   
    
<?php  elseif(is_singular('gift') ) : ?> 
    
<div class="side-toggle_contacts">
<?php echo get_the_term_list( $post->ID, 'authors', '', ', ', '' ); ?>
</div> 
<?php else : endif; ?> 
    
    <div class="content">

  <?php the_content(); ?>  
        
    </div>
    
</div>


<?php endwhile; else : ?>
<?php endif; ?>

<?php if( current_user_can('administrator') ){ ?>
<div class="center"><h5><?php print_r($_POST);?></h5></div>
<?php } ?>


<script>
    
var postURL = '<?php the_permalink(); ?>';
var postTTL = '<?php the_title(); ?>';  
window.history.pushState('Object', postTTL, postURL); 

    
$(".side-toggle_wrap").animate({right: "0"}, 600 );
    
</script>