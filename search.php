<?php 

$s = $_POST['s']; 
$post_type = $_POST['post_type'];

?> 

<?php 
/*if(empty($_POST['s'])) {
    $args = array(  
    's' => '+++',
    'posts_per_page' => 0, 
    'order' => 'date', 
    'orderby' => 'DESC',	
    ); 
} else {}*/

   $args = array(  
    's' => $_POST['s'],
    'posts_per_page' => 15, 
    'order' => 'date', 
    'orderby' => 'DESC',
    'post_type' => $post_type,   
    ); 



query_posts( array_merge( $wp_query->query, $args) ); ?>


<div class="categories_posts">


<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

<?php $post_type = get_post_type( $post_id ) ?> 
<?php if($post_type == 'employees'):?>
<?php get_template_part( 'template/search/search', 'employees' ); ?>
<?php else : ?>
<?php get_template_part( 'template/search/search', 'page' ); ?>
<?php endif; ?>

<?php endwhile; else : ?>

<div class="block">Ничего нет :(</div>

<?php endif; ?>
</div>

