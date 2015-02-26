<?php
	/*
	Template Name: Contact Us Page
	Author: Asshurim Larita @ iBoostme..
	*/

	get_header();
	get_template_part( 'breadcrumbs' );
?>

	<div class="container">
		<div class="box">
			<h2 class="no-background void-top full-width"><span><b>Contact</b> Us</span></h2>

			<section class="map">
				<iframe frameborder="0" src="https://mapsengine.google.com/map/u/0/embed?mid=zB5T74wOKau0.kz4bPhrycyBk" width="100%" height="250"></iframe>
			</section>

			<div class="space-md"></div>

			<div class="info">
				<div class="row">

					<div class="col-md-4">
						<div class="col-md-3 text-center"><img src="<?=asset('images/tracker-logo.png')?>" alt="Street Address"/></div>
						<div class="col-md-9">
							<h4>Street Address</h4>
							<p>Office 1402, Platinum Tower, Cluster I <br/>
								P.O.Box: 38192, Jumeirah Lakes Towers <br/>
								Dubai, UAE</p>
						</div>
					</div>

					<div class="col-md-4">
						<div class="col-md-3 text-center"><img src="<?=asset('images/phone-icon.png')?>" alt="Phone"/></div>
						<div class="col-md-9">
							<h4>Phone</h4>
							<p>Tel: +971 4 369 9787</p>
						</div>
					</div>

					<div class="col-md-4">
						<div class="col-md-3 text-center"><img src="<?=asset('images/email-icon.png')?>" alt="Email"/></div>
						<div class="col-md-9">
							<h4>Email</h4>
							<p>info@metagra-dmcc.ae</p>
						</div>
					</div>
				</div>
			</div>

			<div class="space-md"></div>

			<div id="contact">

				<h2 class="single-line void-top full-width text-left"><span><b>Contact</b> form:</span></h2>

				<div class="spc-md"></div>

				<div class="row">


					<div class="col-md-6 form">

						<?=do_shortcode('[contact-form-7 id="111" title="Contact Form Us"]')?>

					</div>

					<div class="col-md-6 text-center">
						<img src="<?=asset('images/building.jpg')?>" alt="Metagra Trading Contact Form"/>
						<!--<a target="_blank" href="https://twitter.com/#!/metagra" style="color: #ff7200; font-size: 40px; margin:0 6px;"><i class="fa fa-facebook-square"></i></a>
						<a target="_blank" href="https://www.facebook.com/pages/Metagra-Trading-DMCC/291839950958697" style="color: #ff7200; font-size: 40px; margin:0 6px;"><i class="fa fa-twitter-square"></i></a>

						<p>

						<h3>Email us</h3>
						<span class="italic lead">info@metagra.ae</span>

						<h3>Call us</h3>
						<span class="italic lead">+971 4369 9787</span>

						<h3>Address</h3>
						<span class="italic lead">Office 1402</span>
						<span class="italic lead">Palatinium Tower, JLT</span>
						<span class="italic lead">Dubai, UAE</span>

						</p>-->
					</div>

				</div>

				<div class="spc-lg"></div>

			</div>
		</div>
	</div>


<? get_footer();