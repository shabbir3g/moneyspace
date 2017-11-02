<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package moneyspace
 */

?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
  <head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
	
	<?php wp_head(); ?>
  </head>

  <body <?php body_class(); ?>>
    <nav class="navbar navbar-default primary-menu">
      <div class="container">
		<div class="navbar-header">
		  <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#primary-menu" aria-expanded="false">
			<span class="icon-bar"><span class="inner"></span></span>
			<span class="icon-bar"><span class="inner"></span></span>
			<span class="icon-bar"><span class="inner"></span></span>
		  </button>
		  <a class="navbar-brand" href="<?php echo esc_url( home_url( '/' ) ); ?>">
		  
			<?php 
			$logo = get_field('logo_uploader', 'options');

			if($logo): ?>
		  <img src="<?php echo $logo['url']; ?>" alt="<?php echo $logo['alt']; ?>" />
			<?php endif; ?>
		  
		  </a>
		  
			
		  
		  
		  
		</div>
		<div id="navbar" class="navbar-collapse collapse">
		  <div class="language-bar navbar-right">
		  <?php echo do_shortcode('[gtranslate]'); ?>
			<!--<a href="#">En</a>
			<a href="#">Thi</a> -->
		  </div>
		  
		  
	  <?php 
		$search_visiblity = get_field('search_visiblity', 'options');

		if($search_visiblity == 'show'): ?>
			<div class="form navbar-form navbar-right">
				<form class="form-search ngen-search-form" action="<?php echo home_url(); ?>" method="get">
					<input type="text" name="s" id="search-input" class="form-search-input" placeholder="Search for names..." dir="ltr">
					<a class="form-search-submit" id="search-trigger" href="#"><i class="fa fa-search"></i></a>
				</form>
				
			</div>
		<?php endif; ?>
		
		
		<ul class="nav navbar-nav navbar-right">
			<?php 
			$sign_in = get_field('sign_in_text', 'options');

			if($sign_in): ?>
			<li><a href="<?php echo $sign_in['url']; ?>"><?php echo $sign_in['title']; ?></a></li>
			<?php endif; ?>
		</ul>
		  
		  <div class="sidebar">
		  
		  <?php 
			
			wp_nav_menu(array(
				'theme_location'	=> 'main-menu',
				'menu_class'		=> 'nav nav-sidebar',
			));

		  ?>
		  
			  <!--<ul class="nav nav-sidebar">
				<li class="active"><a href="#">About Us</a> 
					<ul>
					  <li><a class="active" href="#">Our Recognition</a></li>
						<li><a href="#">FAQ</a></li>
						<li><a href="#">Blog</a></li>
						<li><a href="#">On press</a></li>
					 </ul>
				</li>
				<li><a href="#">Pricing</a></li>
				<li><a href="#">Features</a></li>
				<li><a href="#">Get Started</a></li>
				<li><a href="#">Blog</a></li>
				<li><a href="#">Contact</a></li>
			  </ul> -->
         
        </div>
		</div>
      </div>
    </nav>

