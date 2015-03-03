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
                        <div class="">
                            <iframe width="600" height="450" frameborder="0" style="border:0" src="https://www.google.com/maps/embed/v1/view?zoom=9&center=25.2048%2C55.2708&key=AIzaSyDtnQ-CYgsu1CGmG8RSpPra8tcw09lsG3o"></iframe>
                        </div>

                        <div class="text-center">

                            <?php echo do_shortcode('[cscf-contact-form]') ?>




                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
<?php get_footer();