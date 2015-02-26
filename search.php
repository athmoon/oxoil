<?php
/**
 * The template for displaying Search Results pages
 *
 * @package WordPress
 * @subpackage Twenty_Fourteen
 * @since Twenty Fourteen 1.0
 */

get_header(); ?>

	<section class="container">
		<div class="space-lg"></div>
		<div class="box" style="padding-left: 15px; padding-right: 15px;">
			<!--Heading-->
			<h2 class="no-background void-top full-width" style="margin-left: -16px; margin-right: -16px;">
				<span><?php printf( __( '<b>Search Results for</b>: %s', 'twentyfourteen' ), get_search_query() ); ?></h2>
			<div class="space-md"></div>

			<div class="row list no-pad-sides" >
				<div id="content" class="site-content" role="main">

					<?php if ( have_posts() ) : ?>


						<?php
						// Start the Loop.
						while ( have_posts() ) : the_post();

							/*
							 * Include the post format-specific template for the content. If you want to
							 * use this in a child theme, then include a file called called content-___.php
							 * (where ___ is the post format) and that will be used instead.
							 */
							get_template_part( 'search_content', get_post_format() );
							echo '<div class="space-md"></div>';
						endwhile;
					else :
						// If no content, include the "No posts found" template.
						?>
						<div class="page-header text-center">
							<h1 class="page-title">No Results Found</h1>
						</div>
					<?php
					endif;
					?>
				</div><!-- #content -->
			</div><!-- #row -->
		</div>

	</section><!-- #primary -->

<?php
get_footer();
