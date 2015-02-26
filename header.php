<!--[if IE 7]>
<html class="ie ie7" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 8]>
<html class="ie ie8" <?php language_attributes(); ?>>
<![endif]-->
<!--[if !(IE 7) | !(IE 8) ]><!-->
<html <?php language_attributes(); ?>>

<!--<![endif]-->
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta charset="<?php bloginfo( 'charset' ); ?>"/>
	<meta name="base_url" content="<?= site_url() ?>"/>
	<title><?php bloginfo( 'name' ); ?>  <?php wp_title(); ?></title>
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

	<?= link_css( 'bootstrap/css/bootstrap.min.css' ) ?>
	<link href='http://fonts.googleapis.com/css?family=Open+Sans:400italic,400,300,700' rel='stylesheet'
	      type='text/css'>
	<?= link_css( 'font-awesome/css/font-awesome.min.css' ) ?>
	<?= link_css( 'style.css' ) ?>
	<?= link_css( 'owl-carousel/owl.carousel.css' ) ?>
	<?= link_css( 'owl-carousel/owl.theme.css' ) ?>

	<?php wp_head(); ?>
</head>
<body>
<!--Start Content-->

<?php global $main_nav; ?>

<!--Header-->
<header>
	<div class="container" id="logo">
		<div class="row">
			<div class="col-lg-4">
				<a href="http://metagra-dmcc.ae">
					<img class="img-responsive logo-img" src="<?=asset('images/logo.png') ?>" alt="Ox Oil Trading DMCC">
				</a>
			</div>
			<div class="col-lg-5 col-md-offset-3">
				<nav class="text-center">
					<div class="navbar-header">
						<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-navbar-collapse-1">
							<span class="sr-only">Toggle navigation</span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button>
					</div>

					<!-- Collect the nav links, forms, and other content for toggling -->
					<div class="collapse navbar-collapse" id="bs-navbar-collapse-1">
						<ul class="nav navbar-nav sm" id="main-menu">
							<li class="active main-items"><a href="#"><img src="<?=asset('images/caret.png') ?>" alt="" class="nav-caret"/></i>Home</a></li>
							<li class=" main-items"><a href="#"><img src="<?=asset('images/caret.png') ?>" alt="" class="nav-caret"/>About Us</a></li>
							<li class=" main-items"><a href="#"><img src="<?=asset('images/caret.png') ?>" alt="" class="nav-caret"/>Products</a></li>
							<li class=" main-items"><a href="#"><img src="<?=asset('images/caret.png') ?>" alt="" class="nav-caret"/>News</a></li>
							<li class=" main-items"><a href="#"><img src="<?=asset('images/caret.png') ?>" alt="" class="nav-caret"/>Contact Us</a></li>
						</ul>
					</div>
				</nav>
			</div>
		</div>
	</div>
</header>