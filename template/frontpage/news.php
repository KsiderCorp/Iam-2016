<div class="front_page-news">
    <div class="block">

<div class="lineblock_wrap allnews">

    <div class="">
    <h2><!--Все --><a href="/category/news/">Новости</a></h2>
    </div>
    
</div>
        <div class="pure-g">

            <div class="pure-u-1">

                <div class="slip_news-block">


                    <?php
$do_not_duplicate = array();    
$sticky = get_option('sticky_posts');
rsort( $sticky );
$sticky = array_slice( $sticky, 0, 10);
$argst = array( 
'category_name' => 'news',
'posts_per_page' => 3, 
'order'=> 'DESC',
'post__in' => $sticky,
'caller_get_posts' => 1, );
query_posts($argst );
if (have_posts()) :  while (have_posts()) : the_post(); $do_not_duplicate[] = $post->ID;?>

<div class="slipnews id<?php the_ID(); ?>">
     <div class="slipcover id<?php the_ID(); ?>">
        <div class="slipcontent">
           
<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
            
            <p>
            <?php the_excerpt(); ?>
            </p>
      </div>
    </div>                       
</div>

<?php endwhile; endif; ?>

                </div>

<div class="linenews">

                   
                        <?php 
$tags = array( 
'posts_per_page' => 10, 
'order'=> 'DESC',
'orderby' =>'date', 
'post__not_in' => $do_not_duplicate,
'tax_query' => array(
		array(
			'taxonomy' => 'category',
			'field' => 'slug',
			'terms' => 'news',
            'include_children' => false,)
    ),
);
query_posts($tags);
if (have_posts()) : while (have_posts()) : the_post(); $do_not_duplicate[] = $post->ID;?>

<div class="lineblock_wrap">
    <div class="lineblock id<?php the_ID(); ?>">

    <div class="fdates"><?php the_time('d.m.Y '); ?></div>

    <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>

        <a class="shadow" href="<?php the_permalink(); ?>"></a>
    </div>
</div>

 <?php wp_reset_postdata(); ?>
 <?php endwhile; else : endif; ?>



               </div>
    
    </div>


        </div>


    </div>
</div>