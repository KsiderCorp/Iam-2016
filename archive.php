<?php get_header(); 



if( is_category('news') ){
    include(TEMPLATEPATH . '/template/archive/news.php'); // yes
}
/*elseif ( is_category('purchase') ){
    include(TEMPLATEPATH . '/template/archive/purchase.php');
}
elseif ( is_category('reports') ){
    include(TEMPLATEPATH . '/template/archive/reports.php');
}
elseif ( is_category('vote') ){
    include(TEMPLATEPATH . '/template/archive/vote.php');
}*/
elseif ( is_post_type_archive('conference') ) {
    include(TEMPLATEPATH . '/template/archive/conference.php'); // yes
}
elseif ( is_post_type_archive('employees') ) {
    include(TEMPLATEPATH . '/template/archive/employees.php'); // yes
}
elseif ( is_post_type_archive('equipment') ) {
    include(TEMPLATEPATH . '/template/archive/equipment.php'); // yes
}
elseif ( is_post_type_archive('science') ) {
    include(TEMPLATEPATH . '/template/archive/science.php');
}
elseif ( is_tax( 'authors') ) {
    include(TEMPLATEPATH . '/template/archive/authors.php');
}
elseif ( is_tax( 'bookgift') ) {
    include(TEMPLATEPATH . '/template/archive/bookgift.php'); // yes
}
elseif ( is_tax( 'science_categories') ) {
    include(TEMPLATEPATH . '/template/archive/science_categories.php');
}
elseif ( is_tax( 'typeconf') ) {
    include(TEMPLATEPATH . '/template/archive/typeconf.php');
}
elseif ( is_tag() ) {
    include(TEMPLATEPATH . '/template/archive/tags.php');
}
else {
    include(TEMPLATEPATH . '/template/archive/category.php'); // yes
}


get_footer(); ?>

