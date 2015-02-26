<!--[if IE 7]>
<html class="ie ie7" <?php language_attributes(); ?> ng-app="oxoilApp">
<![endif]-->
<!--[if IE 8]>
<html class="ie ie8" <?php language_attributes(); ?> ng-app="oxoilApp">
<![endif]-->
<!--[if !(IE 7) | !(IE 8) ]><!-->
<html <?php language_attributes(); ?> ng-app="oxoilApp">

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
	<link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,700italic,700,600,400' rel='stylesheet' type='text/css'>
	<?= link_css( 'font-awesome/css/font-awesome.min.css' ) ?>
	<?= link_css( 'style.css' ) ?>

	<?=link_css('js/owl-carousel/owl.carousel.css')?>
	<?=link_css('js/owl-carousel/owl.theme.css')?>
	<?=link_css('js/owl-carousel/owl.transitions.css')?>

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
			<div class="col-lg-6 col-md-offset-2">
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
							<?php foreach ( $main_nav as $nav ): ?>

								<?php if ( ! $nav->menu_item_parent ): ?>
									<li class="<?= is_active( $nav->object_id ) ?> main-items">
										<a href="<?= $nav->url ?>"><img src="<?=asset('images/caret.png') ?>" alt="" class="nav-caret"/></i>
											<?=$nav->title?>
										</a>
									</li>
								<?php endif; ?>

							<?php endforeach; ?>

						</ul>
					</div>
				</nav>
			</div>
		</div>
	</div>
</header>