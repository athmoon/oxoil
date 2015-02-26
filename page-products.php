<?php
	/*
	Template Name: Products Page
	Author: Asshurim Larita @ iBoostme..
	*/
	get_header();

?>
	<section class="main-section with-bg">
		<div class="container">
			<div class="row">

				<div class="col-md-8">
					<div class="well well-products well-main" style="min-height: 285px;">
						<div class="row">
							<div class="col-md-12"><h2 class="title">Oil Products <i class="fa fa-angle-double-right"></i> </h2></div>
							<div class="col-sm-5" >
								<a href="#">
									<img class="img-responsive" src="http://www.severnfuels.co.uk/images/gallery/road_forecourt_key_fuels.jpg">
								</a>
							</div>
							<div class="col-sm-7" style="padding-left: 0">
								<h2 class="title">Gasoline</h2>
								<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
								<div style="margin-top:30px">
									<img src="<?=asset('images/certificate-icon.png')?>" alt="" class="certificate"/>
									<button class="btn btn-primary btn-blue">DOWNLOAD CERTIFICATE</button>
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-md-12" style="margin-top: 50px;">

								<div id="owl-carousel">

									<div class="item"><img src="http://lorempixel.com/200/300/" alt="Owl Image"></div>
									<div class="item"><img src="http://lorempixel.com/200/300/" alt="Owl Image"></div>
									<div class="item"><img src="http://lorempixel.com/200/300/" alt="Owl Image"></div>
									<div class="item"><img src="http://lorempixel.com/200/300/" alt="Owl Image"></div>
									<div class="item"><img src="http://lorempixel.com/200/300/" alt="Owl Image"></div>
									<div class="item"><img src="http://lorempixel.com/200/300/" alt="Owl Image"></div>
									<div class="item"><img src="http://lorempixel.com/200/300/" alt="Owl Image"></div>
									<div class="item"><img src="http://lorempixel.com/200/300/" alt="Owl Image"></div>

								</div>

							</div>
						</div>
					</div>
				</div>
				<div class="col-md-4">
					<div class="well well-products-sidebar">
						<h2 class="title">News</h2>
						<ul class="list-unstyled recent">
							<li><a href="#">January 6, 2015</a><p>Fuel Oil will increase next year</p></li>
							<li><a href="#">January 6, 2015</a><p>Fuel Oil will increase next year</p></li>
						</ul>

						<button class="btn btn-primary btn-blue btn-lg">READ MORE</button>
					</div>
				</div>
			</div>
		</div>

	</section>
<?php get_footer();