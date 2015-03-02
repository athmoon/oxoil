<?php
/*
Template Name: News Page
Author: Juni Brosas @ iBoostme..
*/
get_header();
?>


<section class="main-section with-bg">
    <div class="container">
        <div class="row">

            <div class="col-md-8">
                <div class="well well-products well-main" style="min-height: 640px;">
                    <div class="row">
                        <div class="col-md-2" style="padding-right: 0;  margin-top: 25px;"><h2 class="title">News <i class="fa fa-angle-double-right"></i> </h2></div>
                        <div class="col-sm-9 news-list" style="padding-left: 0;">
                            <h2 class="title news-title">Rigzone Original News & Analysis</h2>

                            <?php echo do_shortcode('[wp-rss-aggregator limit="5"]') ?>

                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="well well-products-sidebar" style="padding: 15px;">
                    <h2 class="title" style="margin-bottom: 10px;">Commodity Index</h2>

                    <?php include('widgets/widget-commodity.php') ?>

                </div>
            </div>
        </div>
    </div>
</section>


<?php get_footer(); ?>
