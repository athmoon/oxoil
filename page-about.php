<?php
    /*
    Template Name: About Us Page
    Author: Juni Brosas @ iBoostme..
    */
    get_header();

    $featuredProducts =  json_encode( get_field('product_features') );
?>
<section class="main-section with-bg">
    <div class="container">
        <div class="row">
            <div class="col-md-4 col-md-offset-2">
                <div class="header-slogan">
                    <h1>High Standard Fuel Oil Standing</h1>
                    <p>We are a spirited and enthusiastic team dedicated to delivering superior business results.</p>
                </div>
            </div>
        </div>
        <div class="row" style="margin-top: 200px; margin-bottom: 20px;">
            <div class="col-md-6">
                <img src="http://www.aecom.com/deployedfiles/Internet/Homepage/Kuwait_Oil_Company_690x355.jpg" alt="About Us" title="About Us" class="img-responsive" />
            </div>
            <div class="col-md-6">
                <h3 class="header-with-border">Focal Point on Trading</h3>
                <h2 class="header-normal">We provide energy behind phenomenal growth.</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
            </div>
        </div>
    </div>
</section>

<?php get_footer(); ?>



