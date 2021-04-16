<?php 
/*
* Nick Brazda / #200295036
* The template for displaying the footer
*/
?>
	<footer>
		<div><?php dynamic_sidebar('footer_area_one');?></div>
		<div><?php dynamic_sidebar('footer_area_two');?></div>
		<div><?php dynamic_sidebar('footer_area_three');?></div>
		<div><?php dynamic_sidebar('footer_area_four');?></div>
	</footer>
	<?php wp_footer(); ?>
<!-- Closing body and html tag from header.php file-->
</body>
</html>