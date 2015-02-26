
<!--Footer-->
<footer>
	<!--footer bottom-->
	<section class="bottom">
		<div class="container copyright">
			<div class="row">
				<div class="col-lg-4 col-sm-6">
					<small>Copyright OX OIL TRADING © 2014. All Rights Reserved</small>
					<p><i class="fa fa-phone-square"></i> Call us <span class="emp"><b>+123 4567 8901</b></span>
						<br/> <small>Our phone lines are available 24/7</small>
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
<?=link_js('owl-carousel/owl.carousel.js')?>
<?=link_js('js/jquery.jticker.js')?>
<script type="text/javascript">
	jQuery(function($) {
		$('.ticker').jTicker({
			offset: 2
		});
	});
</script>

<?php wp_footer(); ?>
</body>
</html>