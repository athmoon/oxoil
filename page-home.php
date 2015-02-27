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
					<div class="row" ng-controller="FeatureProductsController">
						<div class="col-md-4 post-nav-container" style="padding-right: 0">
							<ul class="list-unstyled post-nav">
								<li ng-repeat="product in featureProducts">
									<a style="cursor: pointer" ng-click="featureSelect(product.id)">{{ product.title }}</a>
								</li>
								<!--<li><a style="cursor: pointer" ng-click="featureSelect(0)">Base Oil</a></li>
								<li class="active"><a style="cursor: pointer" ng-click="featureSelect(1)">Fuel with Sulfur</a></li>
								<li><a style="cursor: pointer" ng-click="featureSelect(2)">Gasoline</a></li>-->
							</ul>
						</div>
						<div class="col-md-8" style="padding-left: 0; padding-right: 0">
							<div class="row">
								<div class="col-md-4" >
									<a href="#">
										<img class="preview-product img-responsive" ng-src="currentProduct.photo">
									</a>
								</div>
								<div class="col-md-8">
									<!--<h4 class="media-heading">Media heading</h4>-->
									<p>{{ currentProduct.description }}</p>
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



