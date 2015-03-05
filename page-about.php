<?php
    /*
    Template Name: About Us Page
    Author: Juni Brosas @ iBoostme..
    */
    get_header();

    $featuredProducts =  json_encode( get_field('product_features') );
?>
<section class="banner-section">
    <div class="container">
        <div class="row">
            <div class="col-md-4 col-md-offset-2">
                <div class="header-slogan">
                    <h1>High Standard Fuel Oil Standing</h1>
                    <p>We are a spirited and enthusiastic team dedicated to delivering superior business results.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<?php get_footer(); ?>



