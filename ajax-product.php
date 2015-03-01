<?php
$products = get_field('products');
?>
<div class="col-sm-5" >
	<a href="<?php echo get_page_link($post->ID)?>">
		<?=get_the_post_thumbnail($post->ID, '', ['class' => 'img-responsive'])?>
	</a>
</div>
<div class="col-sm-7" style="padding-left: 0">
	<h2 class="title"><?=$post->post_title?></h2>
	<p><?=$post->post_content?></p>
	<div style="margin-top:30px">
		<img src="<?=asset('images/certificate-icon.png')?>" alt="" class="certificate"/>

		<a href="<?php the_field('oil_certification_link', $post->ID) ?>" class="btn btn-primary btn-blue link">DOWNLOAD CERTIFICATE</a>

	</div>
</div>