<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package something
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">


	<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/assets/css/reset.css" media="all">
	<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/assets/css/header.css" media="all">
	<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/assets/css/home.css" media="all">
	<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/assets/css/blog.css" media="all">
	<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/assets/css/contact.css" media="all">



	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>


	<div class="header">
		<div class="top-header">
			<div class="container">
				<div class="row align-items-center">
					<div class="col-md-9">
						<ul class="top-header-ul">
							<li>+32-456-789012</li>
							<li>121 Park Drive, Varick Str, Newyork, USA</li>
						</ul>
					</div>
					<div class="col-md-3">
						<ul class="top-header-ul">
							<li>
								<a href="">
									<img src="<?php echo get_template_directory_uri();?>/assets/img/insta.png">
								</a>
							</li>
							<li>
								<a href="">
									<img src="<?php echo get_template_directory_uri();?>/assets/img/facenook.png">
								</a>
							</li>
							<li>
								<a href="">
									<img src="<?php echo get_template_directory_uri();?>/assets/img/insta.png">
								</a>
							</li>
							<li>
								<a href="">
									<img src="<?php echo get_template_directory_uri();?>/assets/img/insta.png">
								</a>
							</li>
							<li>
								<a href="">
									<img src="<?php echo get_template_directory_uri();?>/assets/img/facebook.png">
								</a>
							</li>
						</ul>
					</div>
				</div>
			</div>
		</div>


		<div class="middle-header">
			<div class="container">
				<div class="row">
					<div class="col-md-3">
						<div class="logo">
							<a href="<?=site_url();?>">
								<img src="<?php echo get_template_directory_uri();?>/assets/img/re-fresh.png">
							</a>
						</div>
					</div>
					<div class="col-md-9">
						<div class="middle-header-info">
							<h2>Certified Company</h2>
							<p>ISO 9001:2005</p>
						</div>
						<div class="middle-header-info">
							<h2>The Best Industrial</h2>
							<p>Solution Provider</p>
						</div>
						<button type="button" class="btn btn-warning">PURCHASE</button>
					</div>
				</div>
			</div>
			
		</div>

		<div class="main-header">
			<div class="container">
				<nav class="navbar navbar-expand-lg navbar-light">
	                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
	                    <span class="navbar-toggler-icon"></span>
	                </button>

	                <div class="collapse navbar-collapse" id="navbarSupportedContent">

	                    <?php

	                        $args = [
	                            'menu' => "primary", 
	                            'menu_class' => "navbar-nav",
	                        ];

	                        wp_nav_menu($args);
	                    ?>   

	                    

		                <form class="form-inline my-2 my-lg-0 ml-auto" action="http://localhost/wordpress/" method="get">

	                    	
							<img src="<?php echo get_template_directory_uri();?>/assets/img/facebook.png">
								
	                    </form>  
	                </div>
	            </nav>
			</div>
		</div> 
		
	</div>




