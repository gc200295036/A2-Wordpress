<?php
/* Nick Brazda / #200295036
* The header
*
*/
?>
<!DOCTYPE html>
<!--Builds up a set of HTML attributes containing the text direction and language information for the page.-->
<html <?php language_attributes();?>>
		<head>
			<meta charset="<?php bloginfo('charset');?>">
			<meta name="viewport" content="width=device-width, initial-scale=1">
			<!-- link CSS -->
			<link rel="stylesheet" type="text/css" href="<?php echo esc_url(home_url('wp-content\themes\nicksTheme\assets\css\custom-style.css')); ?>"/>
		</head>
		<!-- Add google font optional -->
		<?php wp_head();?>
		<!-- end of head -->
		</head>
		<body <?php body_class(); ?>>
		<!-- Notice that the body and html element is open in the header file, it will be closed off in the footer template-->
		<header>
			<article>
				<a href="<?php echo esc_url(home_url()); ?>">
				<!-- Logo -->
				<img src="<?php echo esc_url(home_url('wp-content\uploads\2021\02\logo.png'));?>" alt="logo">
				</a>
			</article>
			<nav>
				<?php 
				// Calling in wordpress menu
					wp_nav_menu(array(
						'menu' => 'main', // this is the name for our menu
						'theme_location' => '', // this will be left empty
						// drop down layer
						'depth' => 2,
						// set fall back to false
						'fallback_cb' => false
					));
				?>
			</nav>
		</header>
			<!-- go to footer.php-->
		