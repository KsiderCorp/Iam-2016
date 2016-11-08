<?php include(TEMPLATEPATH . '/template/navstyle.php'); ?>

<?php 
$image = '';
if( get_field('photo') ):
$attachment_id = get_field('photo');
$size = "full"; // (thumbnail, medium, large, full or custom size)
$image = wp_get_attachment_image_src( $attachment_id, $size );
else :
$image[0] =  bloginfo("template_url") .'/img/emploers/yo.svg';
endif;

$position = '';
if( get_field('position') ): 
  $position =  get_field('position'); 
else : $position = 'Должность'; 
endif;

$rank = '';
if( get_field('rank') ): 
    $rank = get_field('rank'); 
else : 
    $rank = ''; 
endif;

$phone = '';
if( get_field('phone') ): 
   $phone = '<span><i class="icon-phone"></i>'.get_field('phone').'</span>'; 
else : endif;

$mail='';
if( get_field('email') ):
    $fimail = get_field('email');
    $mail='<span><i class="icon-mail"></i> <a href="mailto:'.$fimail.'">'.$fimail.'</a></span>'; 
else :
    $mail='<span><i class="icon-mail"></i> <a href="mailto:info@iam.ras.ru">info@iam.ras.ru</a></span>';
endif;

$url = wp_get_shortlink();

?>

<style>
.persone_page-photo span{
        background-image: url(<?php echo $image[0]; ?>);
    }  
</style>


<div class="persone_page">

<div class="persone_page-header">
    <div class="persone_page-photo">
    
    <span>
    Фотография <?php the_title(); ?>
    <a href="<?php echo $image[0]; ?>" class="photolink"></a>
    </span>

    </div>
</div>

<div class="persone_page-details">
    <div class="persone_page-name">
<a href="/employees/" class="persone_page-backlink"><i class="icon-arrow-left-1"></i></a>
         <?php the_title(); ?>
    </div>
    <div class="persone_page-rank">
       <?php echo $position; ?>, <?php echo $rank; ?> 
    </div>
</div>

<div class="persone_page-content">
    
    <div class="block">
        <div class="pure-g">
            <div class="pure-u-3-4">
                <div class="persone_page-text">
           <?php the_content(); ?>         
                </div>
            </div>
            <div class="pure-u-1-4">
                <div class="persone_page-sidebar">
                  <?php echo $mail; ?>
                  <?php echo $phone; ?>  
                </div>
                
                <div class="persone_page-like">
                
<div class="likely likely-small" data-single-title="Поделиться">
	<div class="facebook" title="Поделиться ссылкой на Фейсбуке"></div>
	<div class="twitter" title="Поделиться ссылкой в Твиттере"></div>
	<div class="vkontakte" title="Поделиться ссылкой во Вконтакте"></div>
	<div class="gplus" title="Поделиться ссылкой в Гугл-плюсе"></div>
</div>  
                    
<!-- <a href="<?php echo $url; ?>" class="short-link"><?php echo $url; ?></a> -->
                      
                </div>
                
                
<?php if( get_field('idsbook') ):?>                
            <div class="persone_page-books">
 
<?php 
$idsbook = explode(',', get_field('idsbook')); 
                
$arg = array( 
    'post_type' => 'gift',
    'posts_per_page'=> -1,
    'order' => 'DESC',
    
    'tax_query' => array(
        'relation' => 'OR',
		array(
			'taxonomy' => 'authors',
			'field' => 'id',
			'terms' => $idsbook,
            'operator' => 'IN',
        )
    ),

);
$query = new WP_Query( $arg );
if ( $query->have_posts()) : while ( $query->have_posts() ) : $query->the_post(); 
?>

<div class="person-book_list">
<a href="<?php the_permalink(); ?>" rel="<?php the_ID(); ?>" class="gift-link post-link"  data-link="<?php echo home_url();?>/ajaxloader/">
<?php the_title(); ?></a>
</div> 
  

<?php  wp_reset_postdata(); ?>
<?php endwhile; else : ?>
<?php endif; ?>              

                

            </div>
<?php else : endif; ?>	            
            
            </div>
        </div>
        
    </div>
    
</div>

</div>
