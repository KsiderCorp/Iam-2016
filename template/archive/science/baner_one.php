<div class="science_banerone">
<style>
    .science_banerone {
        background-image: url(<?php echo $image[0]; ?>);
    }
</style>
  <div class="block">
      
    <div class="banerone_flex">
    
    <div class="banerone_post">
       
<?php if(has_post_format( 'video' ) ) : ?>       
<?php 
 if(get_field('link') ) : 
$vidlink = get_field('link');
 else : 
$vidlink = 'XRGFpqdIQRE'; 
 endif; ?>
<div class="video_link"> 
<a href="http://www.youtube.com/watch?v=<?php echo $vidlink; ?>" class="science-video-l popup-youtube"></a>
</div> 

<?php elseif( has_post_format( 'aside' ) ) : ?>
<?php else : ?>
<?php endif; ?>       
       
        <div class="banerone_title">
        <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
        </h2>
        </div>
        <div class="banerone_description"><p><?php the_excerpt(); ?></p></div>
    </div>
    
    </div>
    
  </div>   
</div>
