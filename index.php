<?php get_header(); get_template_part('breadcrumbs');  have_posts(); the_post(); ?>

	<?php
	$urlArray = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
	$segments = explode('/', $urlArray);
	$numSegments = count($segments);
	$currentSegment = $segments[$numSegments - 2];


?>

<section class="container">
	<div class="box" style="padding-left: 15px; padding-right: 15px;">
	<article class="row list no-pad-sides">
		<figure class="col-md-5">
			<?php if(has_post_thumbnail(get_the_ID())): ?>
				<?php echo get_the_post_thumbnail(get_the_ID()); ?>
			<?php else: ?>
				<img src="<?=asset('images/image-empty.jpg') ?>" class="img-responsive" alt="Image Empty"/>
			<?php endif; ?>
		</figure>

		<div class="summary col-md-7">
			<h1 class="hidden-xs hidden-sm">
				<?php
				$title = get_the_title();
				if($currentSegment == 'who-we-are'){
					$keyword = "Who";
					echo '<span style="font-weight: normal; text-transform: capitalize;">'.str_ireplace($keyword, '<span class="emp-orange">'.$keyword.'</span>', $title).'</span>';
				}else if($currentSegment == 'what-we-do'){
					$keyword = "What";
					echo '<span style="font-weight: normal; text-transform: capitalize;">'.str_ireplace($keyword, '<span class="emp-orange">'.$keyword.'</span>', $title).'</span>';
				}else
				{
					the_title();
				}
				?>
			</h1>

			<div class="space-sm">
				<?php the_content(); ?>
			</div>
		</div>

	</article>
	</div>
</section>

<?php get_footer(); ?>