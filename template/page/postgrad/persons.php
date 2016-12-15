<div class="postdock-teaschers">
    <div class="block">
        
        <div class="teaschers_head">
            <h2>Преподавательский состав</h2>
        </div>
<div class="teaschers_list">
<div class="pure-g" >
<?php 
 $teacher  = array( 
'post_type'=>'employees',
'emptype' =>  'professor', 
'posts_per_page' => -1, 
'orderby'=> 'date',
'order'=> 'DESC' );
    $postslist = get_posts( $teacher );  
foreach ($postslist as $post) :  setup_postdata($post);  ?>    
    
<div class="pure-u-1-6">
<?php include(TEMPLATEPATH . '/template/uni/persone_card.php'); ?>
</div>

<?php wp_reset_postdata(); ?>
<?php endforeach; ?>
</div>
</div>        
        
    </div>
</div>