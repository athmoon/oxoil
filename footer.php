
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
					<div class="input-group sexy-form">
						<input type="text" class="form-control" placeholder="Enter Email Address">
                        <span class="input-group-btn">
                            <button class="btn btn-primary btn-blue" type="button">SUBSCRIBE</button>
                        </span>
					</div><!-- /input-group -->
				</div>
			</div>

		</div>
	</section>
</footer>

<?=link_js('jquery/jquery.min.js')?>
<?=link_js('bootstrap/js/bootstrap.min.js')?>
<?=link_js('js/jquery.jticker.js')?>
<?=link_js('js/owl-carousel/owl.carousel.min.js')?>

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
	});
</script>

<?php wp_footer(); ?>
</body>
</html>