<?php get_header(); ?>

<?php if ( get_field('confend') == true ) 
             { ?>
	<?php include(TEMPLATEPATH . '/template/single/conference/conference-closed.php'); ?>
		<?php } 
else { ?>
			<?php include(TEMPLATEPATH . '/template/single/conference/conference-current.php'); ?>
<?php } ?>