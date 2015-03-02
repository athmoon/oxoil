
<footer>
	<!--footer bottom-->
	<section class="bottom">
		<div class="container copyright">
			<div class="row">
				<div class="col-lg-4 col-sm-6">
					<small>Copyright OX OIL TRADING © 2014. All Rights Reserved</small>
					<p><i class="fa fa-phone-square"></i> Call us <span class="emp"><b>+123 4567 8901</b></span>
					</p>
				</div>
				<div class="col-lg-4 col-sm-6">
					<?php $base_url = get_site_url(); ?>
					<div id="email-subscribers-2">
						<link rel="stylesheet" media="screen" type="text/css" href="<?=$base_url ?>/wp-content/plugins/email-subscribers/widget/es-widget.css">
						<script language="javascript" type="text/javascript" src="<?=$base_url ?>/wp-content/plugins/email-subscribers/widget/es-widget.js"></script>
						<div>
							<div class="es_msg"><span id="es_msg"></span></div>
							<div class="input-group sexy-form">
								<span>
									<input class="es_textbox_class form-control" name="es_txt_email" id="es_txt_email" onkeypress="if(event.keyCode==13) es_submit_page('<?=$base_url ?>')" value="" type="email" placeholder="Enter your email address">
								</span>
								<span class="input-group-btn">
									<button class="btn btn-primary btn-blue" name="es_txt_button" id="es_txt_button"  onclick="return es_submit_page('<?=$base_url ?>')" type="submit">SUBSCRIBE</button>
								</span>
							</div>
							<input name="es_txt_name" id="es_txt_name" value="" type="hidden">
							<input name="es_txt_group" id="es_txt_group" value="Subscription" type="hidden">
						</div>
					</div>
					<!--<div class="input-group sexy-form">
						<input type="text" class="form-control" placeholder="Enter Email Address">
                        <span class="input-group-btn">
                            <button class="btn btn-primary btn-blue" type="button">SUBSCRIBE</button>
                        </span>
					</div>--><!-- /input-group -->
				</div>
			</div>

		</div>
	</section>
</footer>

<?=link_js('jquery/jquery.min.js')?>
<?=link_js('bootstrap/js/bootstrap.min.js')?>
<?=link_js('js/jquery.jticker.js')?>
<?=link_js('js/owl-carousel/owl.carousel.min.js')?>
<?=link_js('js/featured.list.js')?>
<?=link_js('js/angular.js')?>
<?=link_js('js/main.js')?>
<?=link_js('js/app.js')?>


<script type="text/javascript">
	jQuery(function($) {
		$('.ticker').jTicker({
			offset: 2
		});
		$("#owl-carousel").owlCarousel({

			autoPlay: 3000, //Set AutoPlay to 3 seconds

			items : 4,
			itemsDesktop : [1199,3],
			itemsDesktopSmall : [979,3]

		});
		$('.wprss-time-ago').prepend('<i class="fa fa-clock-o"></i> ');
		$('.nav-previous a').prepend('<i class="fa fa-angle-double-left"></i> ');
		$('.nav-next a').append(' <i class="fa fa-angle-double-right"></i> ');
	});
</script>

<?php wp_footer(); ?>
</body>
</html>