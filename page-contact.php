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
                        <div class="row">
                            <div class="col-md-12">
                                <iframe width="100%" height="400" frameborder="0" style="border:0" src="https://www.google.com/maps/embed/v1/view?zoom=9&center=25.2048%2C55.2708&key=AIzaSyDtnQ-CYgsu1CGmG8RSpPra8tcw09lsG3o"></iframe>
                            </div>
                        </div>

                        <div class="row" style="margin-top:20px;">
                            <div class="col-md-6">
                                Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium. Integer tincidunt. Cras dapibus. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec.
                            </div>
                            <div class="col-md-6">
                                <?php echo do_shortcode('[cscf-contact-form]') ?>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
<?php get_footer();