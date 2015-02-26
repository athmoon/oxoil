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

<!--	<pre>--><?php //var_dump( $main_nav ); ?><!--</pre>-->

	<div class="container" id="logo">
		<div class="row">
			<div class="col-md-8">
				<a href="<?= get_site_url() ?>">
					<img class="img-responsive logo-img" src="<?= asset( 'images/logo.png' ) ?>"
						 alt="Metagra | Your trading partner in Middle East and Europe"/>
				</a>
				<span >
					<img class="logo-tag" src="<?= asset( 'images/logo-span.png' ) ?>" alt=""/>
				</span>
			</div>
			<div class="col-md-4">
				<?php include('my-widgets/widget-commodities.php')?>
			</div>
		</div>
	</div>

	<div class="container">
		<nav class="navbar-default">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
						data-target="#bs-navbar-collapse-1">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
			</div>

			<!-- Collect the nav links, forms, and other content for toggling -->
			<div class="collapse navbar-collapse" id="bs-navbar-collapse-1">

				<ul class="nav navbar-nav sm" id="main-menu">
					<li id="menu-home" class="hidden-sm hidden-xs"><a href="<?php echo get_home_url(); ?>">Home</a></li>
					<?php foreach ( $main_nav as $nav ): ?>

						<?php if ( ! $nav->menu_item_parent ): ?>
							<li class="<?= is_active( $nav->object_id ) ?> main-items">
								<a href="<?= $nav->url ?>" class="first-level"><?= $nav->title ?>
									<?php if( $nav->title == 'Products'){
										echo '<i class="drop-arrow posUp fa fa-chevron-down"></i>';
									}?>
								</a>

								<ul class="dropdown-menu" role="menu">
									<?php foreach ( $main_nav as $s_nav ): if($s_nav->menu_item_parent == $nav->ID): ?>
										<li>
											<a href="<?php echo get_page_link($s_nav->object_id)?>"><?= $s_nav->title ?> <i class="drop-arrow posLeft fa fa-chevron-right pull-right"></i></a>
											<ul class="dropdown-menu sub-menu">
												<?php foreach ( $main_nav as $_last ): if($_last->menu_item_parent == $s_nav->ID): ?>
													<li><a href="<?= $_last->url ?>"><?= $_last->title ?></a></li>
												<?php endif; endforeach; ?>
											</ul>
										</li>
									<?php endif; endforeach; ?>
								</ul>
							</li>
						<?php endif; ?>

					<?php endforeach; ?>

				</ul>
				<div class="col-sm-4 col-md-4 pull-right text-right">
					<?php get_search_form(); ?>
				</div>
			</div>
			<!-- /.navbar-collapse -->
		</nav>
	</div>
</header>