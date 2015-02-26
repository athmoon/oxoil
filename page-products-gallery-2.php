<?php
	/*
	Template Name: Product Gallery 2
	Author: Asshurim Larita @ iBoostme..
	*/
	get_header();

	get_template_part('breadcrumbs');
	$featured_product_gallery = get_field('featured_product_gallery');
?>

	<section class="container">
		<h2 class="no-background void-top"><span><?=get_field('featured_product_title')?></span></h2>
		<p class="text-center"><?=get_field('featured_product_description')?></p>

		<div class="space-md"></div>

		<div class="featured-list gallery">
			<?php foreach($featured_product_gallery as $i=>$item): ?>
				<div class="text-center col-sm-3 item"> <figure style="background-image: url(<?=$item['image']?>)"><a href="#"><img src="<?=asset('images/magnify.png')?>" alt="#"/></a></figure> <h3><?=$item['text']?></h3>  </div>
				<?php if($i%4 == 3): ?>
					<div class="space-md col-xs-12"></div>
				<?php endif; ?>
			<?php endforeach; ?>
		</div>


	</section>


<?php get_footer();