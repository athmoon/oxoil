<?php
/*
Template Name: Product Gallery
Author: Asshurim Larita @ iBoostme..
*/
get_header();

get_template_part('breadcrumbs');
$products = get_field('products');
$featured_product_gallery = get_field('featured_product_gallery');
?>
	<div id="featured-products"></div>
	<section class="container featured-products">

		<h2 class="no-background void-top"><span>Metal</span></h2>


		<article class="row list">
			<div class="pre-loader"><span><?=preloader()?></span></div>
			<div class="ajax-content">
				<figure class="col-md-5"><?=get_the_post_thumbnail($products[0]->ID)?></figure>
				<div class="summary col-md-7">
					<h1 class="hidden-xs hidden-sm"><?=$products[0]->post_title?></h1>
					<?=$products[0]->post_content?>
				</div>
			</div>
		</article>

		<!--<div id="featured-list" class="owl-carousel featured-list">
			<?php /*foreach($products as $product) : */?>
				<div class="text-center" style="padding-top: 1px;"><figure style="background-image: url(<?/*=thumbnail_src($product->ID)*/?>)"><a data-id="<?/*=$product->ID*/?>" href="#featured"><img src="<?/*=asset('images/magnify.png')*/?>" alt="#"/></a></figure> <h3><?/*=$product->post_title*/?></h3> <article class="small"><?/*=$product->post_excerpt*/?></article> </div>
			<?php /*endforeach; */?>
		</div>-->

	</section>

<?php get_footer();