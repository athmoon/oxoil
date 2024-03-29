<?php
	/*
	Template Name: HOME Page
	Author: Juni Brosas @ iBoostme..
	*/
	get_header();

	$featuredProducts =  json_encode( get_field('product_features') );
?>
<section class="banner-section">
	<img src="<?=asset('images/banner.jpg')?>" alt="" class="img-responsive" style="width: 100%;"/>
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
				<div class="well well-main" style="min-height: 300px;">
					<h2 class="title">Oil Products</h2>
					<div class="row" ng-controller="FeatureProductsController">
						<span ng-init='initFeature(<?=$featuredProducts?>)'></span>
						<div class="col-md-4 post-nav-container">
							<ul class="list-unstyled post-nav">
								<li ng-repeat="product in featureProducts" ng-class="currentProduct === product ? 'active' : '' ">
									<a style="cursor: pointer" ng-click="featureSelect( product )">{{ product.title }}</a>
								</li>
							</ul>
						</div>
						<div class="col-md-8" style="padding-left: 0; padding-right: 0">
							<div class="row">
								<div class="col-md-5" >
									<a href="#">
										<img class="preview-product img-responsive" ng-src="{{ currentProduct.photo }}">
									</a>
								</div>
								<div class="col-md-7">
									<!--<h4 class="media-heading">Media heading</h4>-->
									<p>{{ currentProduct.description }}</p>
									<!--<div class="text-right">
										<a href="#" class="read-more-btn">read more <i class="fa fa-angle-double-right"></i></a>
									</div>-->
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="col-md-4">
				<div class="well short-feeds" >
					<?php include('widgets/widget-short-feeds.php')?>
				</div>


			</div>
		</div>
	</div>

</section>

<?php get_footer(); ?>



