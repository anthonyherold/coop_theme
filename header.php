<?php
/**
 * The template for displaying the header
 *
 * Displays all of the head element and everything up until the "container" div.
 *
 * @package FoundationPress
 * @since FoundationPress 1.0.0
 */

?>
<!doctype html>
<html class="no-js" <?php language_attributes(); ?> >
	<head>
		<meta charset="<?php bloginfo( 'charset' ); ?>" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800" rel="stylesheet">
		<?php wp_head(); ?>
	</head>

<section class="menu">
	<div class="row">
	<ul class="menu align-right">
	<img class="logo" src="wp-content/themes/coop_theme/assets/images/logo.png">
  <li><a href="#">contact</a></li>
  <li><a href="#">S'investir</a></li>
  <li><a href="#">la virgule</a></li>
  <li><a href="#">La coopérative</a></li>
</ul>
</div>
</section>


	<section class="container">
		<?php do_action( 'foundationpress_after_header' );
