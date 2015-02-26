<?php
	/*
	Template Name: Product Page
	Author: Asshurim Larita @ iBoostme..
	*/
	get_header();

	get_template_part('breadcrumbs');
	$products = get_field('products');
	$featured_product_gallery = get_field('featured_product_gallery');
?>
	<div id="featured-products"></div>
	<section class="container featured-products">
		<div class="box">
			<h2 class="no-background void-top full-width"><span><?=get_the_title()?></span></h2>
			<div class="space-md"></div>

			<?php
			// check if the first product to be displayed is an oil product.
			$isFirstProductAnOil = false;
			if( $products[0]->post_parent == 122){
				$isFirstProductAnOil = true;
			}
			?>

			<?php
			// display featuring products except for oil products.
			if( !$isFirstProductAnOil ): ?>
				<article class="row list  no-pad-sides">
					<div class="pre-loader"><span><?=preloader()?></span></div>
					<div class="ajax-content">
						<?php if(has_post_thumbnail($products[0]->ID)): ?>
						<figure class="col-md-5"><?=get_the_post_thumbnail($products[0]->ID)?></figure>
						<div class="summary col-md-7">
							<?php else: ?>
							<div class="summary col-md-12">
								<?php endif; ?>
								<h1 class="hidden-xs hidden-sm"><?=$products[0]->post_title?></h1>
								<?=$products[0]->post_content?>
							</div>
						</div>
				</article>
			<?php endif; ?>


			<div id="featured-list" class="owl-carousel featured-list">
				<?php foreach($products as $i => $product) :
					$isOilProducts = false;
					if( $product->post_parent == 122){
						$isOilProducts = true;
					}
					?>
					<?php if($i > 0 ): //remove the first product ?>
						<div class="text-center" style="padding-top: 1px;">
							<?php if(has_post_thumbnail($products[0]->ID)): ?>
								<figure style="background-image: url(<?=thumbnail_src($product->ID)?>)">
									<a data-id="<?=$product->ID?>" href="#featured"><img src="<?=asset('images/magnify.png')?>" alt="#"/></a>
								</figure>
							<?php endif; ?>

							<?php
							if( $isOilProducts ): ?>
								<img src="<?=asset('images/certificate.png')?>" alt="<?=$product->post_title?> Certificate" class="img-responsive" style="width: 80%; margin: 0 auto;"/>
								<h3 class="oil-products-header"><a href="<?php echo get_page_link($product->ID)?>" style="color: #555;"><?=$product->post_title?></a></h3>
								<article class="small"> <?=$product->post_content;?> </article>
							<?php else:?>

								<h3><a href="<?php echo get_page_link($product->ID)?>" style="color: #555;"><?=$product->post_title?></a></h3>
								<article class="small"> <?=$product->post_excerp?> </article>
							<?php endif;
							?>


						</div>
					<?php endif;?>
				<?php endforeach; ?>
			</div>
		</div>
	</section>

<?php get_footer();