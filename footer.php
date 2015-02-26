
<!--Footer-->
<footer>

	<!--Subscription-->
	<!--<section class="subscription container">
		<div class="row">
			<div class="col-md-8 col-md-offset-2">


				<div class="input-group input-group-lg">
					<input type="email" class="form-control" placeholder="Enter Email address">
                  <span class="input-group-btn">
                    <button class="btn btn-danger" type="button">SUBSCRIBE</button>
                  </span>
				</div>

				<?/*=do_shortcode('[contact-form-7 id="57" title="Contact form 1"]')*/?>

				<div class="space"></div>

				<p class="lead"><i class="fa fa-phone-square"></i> <em>Have a Question? Call us</em> <strong class="text-danger">+971 4369 9787</strong> <br> <small class="text-muted">Our phone lines are available 24/7</small></p>

			</div>
		</div>
	</section>-->

	<section>
		<div class="space-md"></div>
		<div class="container">
			<div class="sp pattern back-top"><span class="back-to-top">Top</span></div>
		</div>
	</section>
	<!--Links-->
	<section class="links row">
		<div class="container">
			<div class="col-md-5 subscription">
				<?php $base_url = get_site_url(); ?>
				<div id="email-subscribers-2">
					<link rel="stylesheet" media="screen" type="text/css" href="<?=$base_url ?>/wp-content/plugins/email-subscribers/widget/es-widget.css">
					<script language="javascript" type="text/javascript" src="<?=$base_url ?>/wp-content/plugins/email-subscribers/widget/es-widget.js"></script>
					<div>
						<div class="es_msg"><span id="es_msg"></span></div>
						<div class="input-group input-group-lg">
							<span>
								<input class="es_textbox_class form-control" name="es_txt_email" id="es_txt_email" onkeypress="if(event.keyCode==13) es_submit_page('<?=$base_url ?>')" value="" type="email" placeholder="Enter your email address">
							</span>
							<span class="input-group-btn">
								<button class="btn btn-danger" name="es_txt_button" id="es_txt_button"  onclick="return es_submit_page('<?=$base_url ?>')" type="submit">SUBSCRIBE</button>
							</span>
						</div>
						<input name="es_txt_name" id="es_txt_name" value="" type="hidden">
						<input name="es_txt_group" id="es_txt_group" value="Subscription" type="hidden">
					</div>
				</div>
				<div class="space-sm"></div>
				<p class="contact">Contact Us <span class="number emp">+971 4369 9787</span></p>
			</div>

			<div class="col-md-3 col-sm-6 pull-right">
				<h3 class="ucwords"><span class="thin">Stay</span> Connected</h3>
				<ul class="list-unstyled list-items">
					<li><a target="_blank" href="https://twitter.com/#!/metagra"><i class="fa fa-twitter"></i> Twitter</a></li>
					<li><a target="_blank" href="https://www.facebook.com/pages/Metagra-Trading-DMCC/291839950958697"><i class="fa fa-facebook"></i> Facebook</a></li>
					<li><a target="_blank" href="mailto:info@metagra.ae"><i class="fa fa-envelope"></i> Mail</a></li>
				</ul>
			</div>

			<div class="col-md-3 col-sm-6 pull-right">
				<h3 class="ucwords"><span class="thin">About</span> Metagra</h3>
				<ul class="list-unstyled list-items">
					<li><a href="<?=get_permalink(6)?>"><i class="fa fa-question"></i> About Metagra</a></li>
					<li><a href="<?=get_permalink(8)?>"><i class="fa fa-database"></i> Products</a></li>
					<li><a href="<?=get_permalink(10)?>"><i class="fa fa-star"></i> Our Expertise</a></li>
					<li><a href="<?=get_permalink(14)?>"><i class="fa fa-money"></i> Investments</a></li>
				</ul>
			</div>
		</div>
	</section>


	<!--footer bottom-->
	<section class="bottom">
		<div class="container copyright">
			<small>Copyright Metagra &copy; 2015. All Rights Reserved</small>
		</div>
	</section>
</footer>

<?=link_js('jquery/jquery.min.js')?>
<?=link_js('bootstrap/js/bootstrap.min.js')?>
<?=link_js('owl-carousel/owl.carousel.js')?>
<?=link_js('js/jquery.smartmenus.js')?>
<?=link_js('js/jquery.smartmenus.bootstrap.js')?>
<?=link_js('js/featured.list.js')?>
<?=link_js('js/main.js')?>



<?php wp_footer(); ?>
</body>
</html>