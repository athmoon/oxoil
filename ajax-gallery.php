<?php $gallery = get_field('gallery', $post_id); ?>

<div class="summary col-md-12">
	<div class="featured-list gallery">

	<?php foreach($gallery as $i => $item): ?>
			<div class="text-center col-sm-6"> <figure style="background-image: url(<?=$item['image']?>)"><a href="#"><img src="<?=asset('images/magnify.png')?>" alt="#"/></a></figure> <h3><?=$item['text']?></h3>  </div>
			<?php if($i%2 == 1): ?>
				<div class="col-md-12 space-md"></div>
			<?php endif; ?>
	<?php endforeach; ?>

	</div>

</div>