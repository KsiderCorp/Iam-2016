<?php get_header(); ?>

<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

<?php  if(is_singular('units') ) : 
 include(TEMPLATEPATH . '/template/single/single-lab.php'); 
 
 elseif( is_singular('equipment') ) : 
 include(TEMPLATEPATH . '/template/single/single-eqp.php'); 
 
 elseif( is_singular('conference') ) : 
 include(TEMPLATEPATH . '/template/single/single-conf.php');

 elseif( is_singular('employees') ) : 
 include(TEMPLATEPATH . '/template/single/single-employees.php');   
 
 elseif( is_singular('science') ) : 
 include(TEMPLATEPATH . '/template/single/single-science.php');   

 elseif( is_singular('gift') ) : 
 include(TEMPLATEPATH . '/template/single/single-gift.php');  
 
 else : 
 include(TEMPLATEPATH . '/template/single/single-else.php'); 
 endif; ?>

<?php endwhile; else : ?>



<?php endif; ?>

	
<?php get_footer(); ?>