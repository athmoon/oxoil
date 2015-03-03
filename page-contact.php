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

                            <?php echo do_shortcode('[contact-form-7 id="166" title="Contact Form"]') ?>

                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
<?php get_footer();