<?php
	/*
	Template Name: Products Page
	Author: Asshurim Larita @ iBoostme..
	*/
	get_header();
	$products = get_field('products');

	//trace($products);
?>
	<div id="featured-products"></div>
	<div id="action_url" data-url="<?=admin_url('admin-ajax.php'); ?>"></div>
	<section class="main-section with-bg">
		<div class="container">
			<div class="row">

				<div class="col-md-8">
					<div class="well well-products well-main" style="min-height: 285px;">
						<div class="row">
							<div class="col-md-12"><h2 class="title">Oil Products <i class="fa fa-angle-double-right"></i> </h2></div>
							<!--<div class="col-md-12"><div class="pre-loader"><span><?/*=preloader()*/?></span></div></div>-->
							<div class="ajax-content">
								<?php
									$post = $products[0];
									include('ajax-product.php')
								?>
							</div>
						</div>
						<div class="row">
							<div class="col-md-12" style="margin-top: 50px;">
								<div >
									<div id="owl-carousel" class="featured-list">
										<?php foreach($products as $i => $product) :
											$isOilProducts = false;
											if( $product->post_parent == 122){ $isOilProducts = true; } ?>
											<?php if($i > 0 ): //remove the first product ?>
											<figure class="item">
												<a data-id="<?=$product->ID?>" href="<?php /*echo get_page_link($product->ID)*/?>#" class="link">
													<img src="http://lorempixel.com/200/300/" alt="<?=$product->post_title?> Certificate" class="img-responsive">
													<h4 class="title"><?=$product->post_title?></h4>
												</a>
											</figure>
											<?php endif;?>
										<?php endforeach; ?>
									</div>
								</div>

							</div>
						</div>
					</div>
				</div>
				<div class="col-md-4">
					<div class="well well-products-sidebar">
						<h2 class="title">News</h2>
						<style>
							.nav-links { display: none; }
							.wprss-feed-meta { display: none; }
							.rss-aggregator .feed-item {
								padding: 0 0 10px 0;
								margin: 0 0 10px;
							}
							.wprss-time-ago { font-size: 12px; }
							.well-products-sidebar .title {
								margin: 0 0 10px 0;
							}
							.rss-aggregator a {
								font-size: 13px;
								color: #e7e7e7;
							}
							.rss-aggregator { margin-bottom: 30px; }
						</style>
						<?php echo do_shortcode('[wp-rss-aggregator limit="3"]'); ?>

						<!--<ul class="list-unstyled recent">
							<li><a href="#">January 6, 2015</a><p>Fuel Oil will increase next year</p></li>
							<li><a href="#">January 6, 2015</a><p>Fuel Oil will increase next year</p></li>
						</ul>-->

						<a href="<?=get_permalink( 23 )?>" class="btn btn-primary btn-blue btn-lg link">READ MORE</a>
					</div>
				</div>
			</div>
		</div>
	</section>

<?php get_footer();