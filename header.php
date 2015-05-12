<?php
/**
* Template for the header of the VDBL theme
*
* Handles the portion of the page until the site content.
*
*/
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?> 
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title><?php wp_title(); ?></title>
	<?php wp_head(); ?>
</head>

<body>
	<div class="navbar">
		<div class="navbar-logo">
			<p>Navbar</p>
		</div>
		<div class="navbar-items">
			<ul>
				<li><a href="">About Us</a></li>
				<li><a href="">News</a></li>
				<li><a href="">Recruitment</a></li>
				<li><a href="">Alumni</a></li>
				<li><a href="">Brothers</a></li>
			</ul>
		</div>
	</div>
	

