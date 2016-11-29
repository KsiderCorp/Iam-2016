<div class="science_picblock">
    
    <style>
        .pic_pic.id-<?php the_ID(); ?> {
            background-image: url(<?php echo $image[0]; ?>);
        }   
    </style>
    
    <div class="picblock">
<div class="pic_pic id-<?php the_ID(); ?>"></div>
       
        <div class="picblock_content">
            <div class="picblock_titel">
            
       <a href="<?php the_permalink(); ?>">
            <?php the_title(); ?>
       </a>

            </div>
        </div>
    </div>
    
    
</div>