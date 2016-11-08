<?php include(TEMPLATEPATH . '/template/navstyle.php'); ?>

<?php 
$image = '';
if( get_field('cover') ):
$image = get_field('cover');
else :
$image =  get_bloginfo("template_url") .'/img/emploers/yo.svg';
endif;


$url = wp_get_shortlink();

?>

<style>
.persone_page-photo span{background-image: url(<?php echo $image; ?>);}  
</style>


<div class="persone_page">

<div class="persone_page-header">
    <div class="persone_page-photo">
    
    <span>
    Фотография <?php the_title(); ?>
    <a href="<?php echo $image; ?>" class="photolink"></a>
    </span>

    </div>
</div>

<div class="persone_page-details">
    <div class="persone_page-name">
         <?php the_title(); ?>
    </div>
    <div class="persone_page-rank">
<?php echo get_the_term_list( $post->ID, 'authors', '', ', ', '' ); ?>
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
                
                <div class="persone_page-like">
                
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
    
</div>

</div>
