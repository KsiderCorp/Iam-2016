<div class="block">
<div class="pure-g">
<div class="pure-u-1">
<div class="singttl"><h1><?php the_title(); ?></h1></div>
<hr>
<a id="navline"></a>
</div>
</div>


<!-- Content -->
<div class="pure-g">
<div class="pure-u-3-4">
<?php the_content(); ?>

<!-- pic -->
<!-- тут блок изображений -->

<div class="imglab">
<?php if( get_field('labphoto') ):?>
<?php the_field('labphoto'); ?>
<?php elseif( get_field('expphoto') ):?>
<?php the_field('expphoto'); ?>
<?php else : ?>
<?php endif; ?>
</div>

</div>
<div class="pure-u-1-4">
<div class="singsideblock">

<div class="mainpic">
<?php if( get_field('mainpic') ):?>
<img src="<?php the_field('mainpic'); ?>"  class="logotext">
<?php else : ?>
<?php endif; ?> 
</div>

<div class="owen">
<?php if( get_field('laboratory') ):?>
<?php the_field('laboratory'); ?>
<?php else : ?>
<?php endif; ?>
</div>


<?php include(TEMPLATEPATH . '/tp/eqp/feedback.php'); ?>


</div>
</div>
</div>


</div>




<!-- коменты -->
<div class="comm">

<div class="pure-g">
<div class="block">

<div class="pure-u-1">
<h3>Коментарии:</h3>
</div>

</div>
</div>

<div class="block">
<div class="commblock">

<div class="pure-g">
<div class="pure-u-1" >
<div class="block"><?php // comments_template(); ?></div>
</div>
</div>

</div>
</div>
</div>