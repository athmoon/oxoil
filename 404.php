<?php get_header(); ?>

<div class="container">
	<div class="space-lg"></div>
	<div class="box" style="padding-left: 15px; padding-right: 15px;">
		<!--Heading-->
		<h2 class="no-background void-top full-width" style="margin-left: -16px; margin-right: -16px;">
			<span><b>Page Not Found </b>Error 404</h2>
		<div class="space-md"></div>
		<div class="row">
			<div class="" style="padding-left: 30px; padding-right: 30px">
				<p>The page you requested could not be found, either contact your webmaster or try again. Use your browsers <b>Back</b> button to navigate to the page you have prevously come from</p>
				<p><b>Or you could just press this neat little button:</b></p>
				<div class="space-lg"></div>
				<div class="text-center">
					<a href="<?=get_site_url()?>" class="btn btn-danger btn-sm"><i class="icon-home icon-white"></i> Take Me Home</a>
				</div>
			</div>
		</div>
	</div>


	<!--<div class="row">
		<div class="span12">
			<div class="hero-unit text-center">
				<h2 class="no-background"><span>Page Not Found <small><font face="Tahoma" color="red">Error 404</font></small></span> </h2>
				<br />
				<p>The page you requested could not be found, either contact your webmaster or try again. Use your browsers <b>Back</b> button to navigate to the page you have prevously come from</p>
				<p><b>Or you could just press this neat little button:</b></p>
				<a href="<?/*=get_site_url()*/?>" class="btn btn-large btn-info"><i class="icon-home icon-white"></i> Take Me Home</a>
			</div>

		</div>
	</div>-->
</div>

<?php get_footer(); ?>