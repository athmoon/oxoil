<?php
	/*
	Template Name: Products Page
	Author: Juni Brosas
	*/
	get_header();
	$products = get_field('products');
?>
	<div id="featured-products"></div>
	<section class="main-section with-bg">
		<div class="container">
			<div class="row">
				<div class="col-md-8">
					<div class="well well-products well-main">
						<div class="row">
							<div class="col-md-12"><h2 class="title">Oil Products <i class="fa fa-angle-double-right"></i> </h2></div>
						</div>
						<div class="row" style="display: block; position: relative; min-height: 150px;">
							<div class="pre-loader"><span><?=preloader()?></span></div>
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
													<?=get_the_post_thumbnail($post->ID, '', ['class' => 'img-responsive'])?>
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
					<div class="well well-products-sidebar short-feeds">
						<h2 class="title">News</h2>
						<style>

						</style>

						<?php echo do_shortcode('[wp-rss-aggregator limit="3"]'); ?>


						<a href="<?=get_permalink( 23 )?>" class="btn btn-primary btn-blue btn-lg link">READ MORE</a>
					</div>
				</div>
			</div>
		</div>
	</section>

<?php get_footer();