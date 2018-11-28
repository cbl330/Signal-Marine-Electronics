<!doctype html>
<html lang="en">

	<head>

		<!-- Required meta tags -->
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

		<!-- FontAwesome Fonts -->
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">

		<!-- Normalize CSS -->
		<link rel="stylesheet" type="text/css" href="normalize.css">

		<!-- Bootstrap CSS -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

		<!-- Custom CSS -->
		<link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_url'); ?>">

		<title>Signal Marine Electronics</title>

	</head>

  <body>
  	
  	<header>

  		<!-- NAVIGATION -->
		<nav class="navbar navbar-expand-lg navbar-dark bg-dark sticky-top">
			<div class="container">
				<a class="navbar-brand" href="#">
					<img src="http://signal-marine-electronics.local/wp-content/uploads/2018/11/sme.png">
					<p class="d-lg-none d-md-block">Signal Marine Electronics</p>
				</a>
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
				</button>

				<div class="collapse navbar-collapse" id="navbarSupportedContent">

					<!-- NavWalker -->
					<?php
						wp_nav_menu( array(
							'theme_location'  => 'primary',
							'depth'	          => 2, // 1 = no dropdowns, 2 = with dropdowns.
							'container'       => 'div',
							'container_class' => 'collapse navbar-collapse',
							'container_id'    => 'bs-example-navbar-collapse-1',
							'menu_class'      => 'navbar-nav mr-auto',
							'fallback_cb'     => 'WP_Bootstrap_Navwalker::fallback',
							'walker'          => new WP_Bootstrap_Navwalker(),
					) );
					?>
					<div class="my-2 my-lg-0">
						<ul class="navbar-nav mr-auto">
							<li class="nav-item">
								<P class="nav-link disabled nav-phone lead">Free Estimate: (843) 410-8139</P>
							</li>
						</ul>
					</div>
				</div>
			</div>
		</nav>
		<!-- END NAVIGATION -->