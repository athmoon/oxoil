<?php
	/*
	Template Name: HOME Page
	Author: Juni Brosas @ iBoostme..
	*/
	get_header();

	$featuredProducts = json_encode( get_field('product_features') );
	trace( $featuredProducts );
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
				<div class="well well-main" style="min-height: 300px;">
					<h2 class="title">Oil Products</h2>
					<div class="row" ng-controller="FeatureProductsController" ng-init="featureProducts = <?=json_encode( $featuredProducts )?>">
						<div class="col-md-4 post-nav-container">
							<ul class="list-unstyled post-nav">
								<li ng-repeat="product in featureProducts" ng-class="currentProduct.id == product.id ? 'active' : '' ">
									<a style="cursor: pointer" ng-click="featureSelect( $index )">{{ product.title }}</a>
								</li>
								<!--<li><a style="cursor: pointer" ng-click="featureSelect(0)">Base Oil</a></li>
								<li class="active"><a style="cursor: pointer" ng-click="featureSelect(1)">Fuel with Sulfur</a></li>
								<li><a style="cursor: pointer" ng-click="featureSelect(2)">Gasoline</a></li>-->
							</ul>
						</div>
						<div class="col-md-8" style="padding-left: 0; padding-right: 0">
							<div class="row">
								<div class="col-md-5" >
									<a href="#">
										<img class="preview-product img-responsive" src="{{ currentProduct.photo }}">
									</a>
								</div>
								<div class="col-md-7">
									<!--<h4 class="media-heading">Media heading</h4>-->
									<p>{{ currentProduct.description }}</p>
									<div class="text-right">
										<a href="#" class="read-more-btn">read more <i class="fa fa-angle-double-right"></i></a>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="col-md-4">
				<div class="well short-feeds" >
					<h2 class="title"><a href="<?=get_permalink( 23 )?>" class="link">News</a></h2>
					<div class="scrollbar" id="style-no">
						<?php echo do_shortcode('[wp-rss-aggregator limit="3"]'); ?>
					</div>
				</div>
			</div>
		</div>
	</div>

</section>

<?php get_footer(); ?>



