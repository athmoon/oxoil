<?php
/*
Template Name: Contact Page
Author: Juni Brosas
*/
get_header(); ?>
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
                                            <div class="col-md-3 text-center"><img src="<?=asset('images/tracker-logo.png') ?>" alt="Street Address"></div>
                                            <div class="col-md-9">
                                                <h4>Street Address</h4>
                                                <p>Unit No 30-01-1003 <br/>
                                                    Jewellery & Gemplex 3 <br/>
                                                    Plot No: DMCC-PH2-J&GPlexS <br/>
                                                    Dubai, United Arab Emirates</p>
                                            </div>
                                        </div>

                                        <div class="col-md-4">
                                            <div class="col-md-3 text-center"><img src="<?=asset('images/phone-icon.png') ?>" alt="Phone"></div>
                                            <div class="col-md-9">
                                                <h4>Phone</h4>
                                                <p>Tel: +97143699787</p>
                                                <p>Fax: +97144470598</p>
                                            </div>
                                        </div>

                                        <div class="col-md-4">
                                            <div class="col-md-3 text-center"><img src="<?=asset('images/email-icon.png') ?>" alt="Email"></div>
                                            <div class="col-md-9">
                                                <h4>Email</h4>
                                                <p>info@oxoil.ae</p>
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
                                <iframe style="margin-top:60px;" width="100%" height="369" frameborder="0"src="https://www.google.com/maps/embed?pb=!1m12!1m8!1m3!1d3614.243640722717!2d55.136533!3d25.05973!3m2!1i1024!2i768!4f13.1!2m1!1sJewellery+%26+Gemplex+3++Dubai%2C+United+Arab+Emirates!5e0!3m2!1sen!2sph!4v1427102387881" ></iframe>
                                <!--<iframe style="margin-top:60px;" width="100%" height="369" frameborder="0" src="https://mapsengine.google.com/map/u/0/embed?mid=zB5T74wOKau0.kz4bPhrycyBk"></iframe>-->
                                <!--<iframe width="100%" height="400" frameborder="0" style="border:0" src="https://www.google.com/maps/embed/v1/view?zoom=9&center=25.2048%2C55.2708&key=AIzaSyDtnQ-CYgsu1CGmG8RSpPra8tcw09lsG3o"></iframe>-->
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
<?php get_footer();