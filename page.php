<?php get_header(); ?>
<?php if (have_posts()) : while (have_posts()) : the_post(); 

if( is_page('education') ){ 
    include(TEMPLATEPATH . '/template/page/education.php'); 
}
elseif( is_page('mkmk') ){
  include(TEMPLATEPATH . '/template/page/mkmk.php'); 
}
elseif( is_page('getmail') ){ 
  include(TEMPLATEPATH . '/template/page/getmail.php'); 
}
else {
    
}
endwhile; else : ?>

<?php endif; ?>

	
<?php get_footer(); ?>