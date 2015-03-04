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
                        <div class="row" >
                            <div class="col-md-12" style="margin-top:20px; margin-bottom: 30px;">
                                <div class="info">
                                    <div class="row">

                                        <div class="col-md-4">
                                            <div class="col-md-3 text-center"><img src="http://metagra-dmcc.ae/wp-content/themes/metagra/images/tracker-logo.png" alt="Street Address"></div>
                                            <div class="col-md-9">
                                                <h4>Street Address</h4>
                                                <p>Office 1402, Platinum Tower, Cluster I
                                                    P.O.Box: 38192, Jumeirah Lakes Towers
                                                    Dubai, UAE</p>
                                            </div>
                                        </div>

                                        <div class="col-md-4">
                                            <div class="col-md-3 text-center"><img src="http://metagra-dmcc.ae/wp-content/themes/metagra/images/phone-icon.png" alt="Phone"></div>
                                            <div class="col-md-9">
                                                <h4>Phone</h4>
                                                <p>Tel: +971 4 369 9787</p>
                                            </div>
                                        </div>

                                        <div class="col-md-4">
                                            <div class="col-md-3 text-center"><img src="http://metagra-dmcc.ae/wp-content/themes/metagra/images/email-icon.png" alt="Email"></div>
                                            <div class="col-md-9">
                                                <h4>Email</h4>
                                                <p>info@metagra-dmcc.ae</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="sexy-form">
                                    <?php echo do_shortcode('[cscf-contact-form]') ?>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. </p>
                                <iframe width="100%" height="400" frameborder="0" style="border:0" src="https://www.google.com/maps/embed/v1/view?zoom=9&center=25.2048%2C55.2708&key=AIzaSyDtnQ-CYgsu1CGmG8RSpPra8tcw09lsG3o"></iframe>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
<?php get_footer();