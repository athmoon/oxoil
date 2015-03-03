<?php
/*
Template Name: Contact Page
Author: Juni Brosas
*/
get_header();

?>
    <section class="main-section with-bg">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="well well-products well-main" style="min-height: 400px;">
                        <div class="text-center">

                            <?php /*echo do_shortcode('[contact-form-7 id="166" title="Contact Form"]')*/ ?>

                            <div class="wpcf7" id="wpcf7-f166-o1" lang="en-US" dir="ltr">
                                <div class="screen-reader-response"></div>
                                <form name="" action="/oxoil/wordpress/news/#wpcf7-f166-o1" method="post" class="wpcf7-form ng-pristine ng-valid" novalidate="novalidate">
                                    <div style="display: none;">
                                        <input type="hidden" name="_wpcf7" value="166">
                                        <input type="hidden" name="_wpcf7_version" value="4.1">
                                        <input type="hidden" name="_wpcf7_locale" value="en_US">
                                        <input type="hidden" name="_wpcf7_unit_tag" value="wpcf7-f166-o1">
                                        <input type="hidden" name="_wpnonce" value="0c11b45235">
                                    </div>
                                    <p>Your Name (required)<br>
                                        <span class="wpcf7-form-control-wrap your-name"><input type="text" name="your-name" value="" size="40" class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required" aria-required="true" aria-invalid="false"></span> </p>
                                    <p>Your Email (required)<br>
                                        <span class="wpcf7-form-control-wrap your-email"><input type="email" name="your-email" value="" size="40" class="wpcf7-form-control wpcf7-text wpcf7-email wpcf7-validates-as-required wpcf7-validates-as-email" aria-required="true" aria-invalid="false"></span> </p>
                                    <p>Your Message<br>
                                        <span class="wpcf7-form-control-wrap your-message"><textarea name="your-message" cols="40" rows="10" class="wpcf7-form-control wpcf7-textarea" aria-invalid="false"></textarea></span> </p>
                                    <p><input type="submit" value="Send" class="wpcf7-form-control wpcf7-submit"><img class="ajax-loader" src="http://preview.iboostme.com/oxoil/wordpress/wp-content/plugins/contact-form-7/images/ajax-loader.gif" alt="Sending ..." style="visibility: hidden;"></p>
                                    <div class="wpcf7-response-output wpcf7-display-none"></div>
                                </form>
                            </div>


                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
<?php get_footer();