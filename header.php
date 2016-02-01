<!DOCTYPE <!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<title><?php bloginfo('name'); ?></title>
	<meta charset="<?php bloginfo('charset'); ?>" >
	<meta name="viewport" content="width=device-width">
	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<div class="container">
<!-- site-header -->
<header class="site-header">
<div class="hd-search">
	<?php  get_search_form(); ?>
</div>
	<h1><a href=" <?php echo home_url(); ?>"><?php bloginfo('name'); ?></a></h1>
	<h4><?php bloginfo('description'); ?></h4>
	<?php if(is_page('page-1')){ ?>
		Thank you for visiting the sample page
		<?php } ?>


	<nav class="site-nav">
<?php 
	
	$args = array('theme_location' => 'primary' );

 ?>
	<?php wp_nav_menu( $args ); ?>
</nav>
</header>

<!-- site-header -->
