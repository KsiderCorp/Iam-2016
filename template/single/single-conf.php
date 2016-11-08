<?php get_header(); ?>

<?php if ( get_field('confend') == true ) 
             { ?>
	<?php include(TEMPLATEPATH . '/template/single/conference-closed.php'); ?>
		<?php } 
else { ?>
			<?php include(TEMPLATEPATH . '/template/single/conference-current.php'); ?>
<?php } ?>