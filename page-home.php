<?php
	/*
	Template Name: HOME Page
	Author: Juni Brosas @ iBoostme..
	*/
	get_header();
?>

<section class="banner-section">
	<img src="<?=asset('images/banner.jpg')?>" alt="" class="img-responsive"/>
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<?php include('widgets/widget-ticker.php')?>
			</div>
		</div>
	</div>
</section>

<section class="main-section">
	<div class="container">
		<div class="row">

			<div class="col-md-8">
				<div class="well well-main" style="min-height: 306px;">
					<h2 class="title">Oil Products</h2>
					<div class="row">
						<div class="col-md-4 post-nav-container">
							<ul class="list-unstyled post-nav">
								<li><a href="#">Base Oil</a></li>
								<li class="active"><a href="#">Fuel with Sulfur</a></li>
								<li><a href="#">Gasoline</a></li>
							</ul>
						</div>
						<div class="col-md-8" style="padding-left: 0; padding-right: 0">
							<div class="row">
								<div class="col-md-4" style="padding-right: 0">
									<a href="#">
										<img class="preview-product img-responsive" src="http://www.severnfuels.co.uk/images/gallery/road_forecourt_key_fuels.jpg">
									</a>
								</div>
								<div class="col-md-8">
									<!--<h4 class="media-heading">Media heading</h4>-->
									<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="col-md-4">
				<div class="well">
					<h2 class="title">News</h2>
					<ul class="list-unstyled recent">
						<li><a href="#">January 6, 2015</a><p>Fuel Oil will increase next year</p></li>
						<li><a href="#">January 6, 2015</a><p>Fuel Oil will increase next year</p></li>
					</ul>

					<button class="btn btn-primary btn-blue btn-lg">READ MORE</button>
				</div>
			</div>
		</div>
	</div>

</section>

<?php get_footer(); ?>



