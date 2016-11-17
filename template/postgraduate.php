<?php get_header(); 
/*
Template Name: Аспирантура
*/
?>

<div class="block">
    <div class="posdoc-header">
        <h1><a href="/educatio/"><i class="icon-ios-arrow-thin-left"></i></a> Аспирантура</h1>
    </div>
    
<?php $args = array( 
'post_type'=>'employees','include' => 572);
$postdoc = get_posts( $args );  
foreach ($postdoc as $post) :  setup_postdata($post);?>

<div class="director_blog">
<?php include(TEMPLATEPATH . '/template/uni/persone_strok.php'); ?>   </div>       
       
<?php wp_reset_postdata(); ?>
<?php endforeach; ?>      
</div>



<?php include(TEMPLATEPATH . '/template/page/postgrad/main.php'); ?>
<?php include(TEMPLATEPATH . '/template/page/postgrad/speciality.php'); ?>

<?php include(TEMPLATEPATH . '/template/page/postgrad/persons.php'); ?>

<?php include(TEMPLATEPATH . '/template/page/postgrad/reles.php'); ?>


<?php get_footer(); ?>