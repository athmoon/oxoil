<?php
/*
Template Name: News Page
Author: Juni Brosas @ iBoostme..
*/
get_header();
?>

<style>
    @media (min-width: 1200px){
        .well-products-sidebar {
            /*margin-top: 627px !important;*/
        }
    }
</style>
<section class="main-section with-bg">
    <div class="container">

        <div class="row">

            <div class="col-md-8">
                <div class="well well-products well-main" style="min-height: 640px;">
                    <div class="row">
                        <div class="col-md-2" style="padding-right: 0;  margin-top: 25px;"><h2 class="title">News <i class="fa fa-angle-double-right"></i> </h2></div>
                        <div class="col-sm-9 news-list" style="padding-left: 0;">
                            <h2 class="title news-title">Latest News</h2>

                            <?php echo do_shortcode('[wp-rss-aggregator limit="5"]') ?>

                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="well-news">
                    <?php include('widgets/widget-ticker.php')?>

                    <div class="well short-feeds">
                        <?php include('widgets/widget-short-feeds.php')?>
                    </div>
                </div>

                <!--<div class="">
                    <?php /*include('widgets/widget-ticker.php')*/?>
                </div>
                <div class="well well-products-sidebar short-feeds">
                    <?php /*include('widgets/widget-short-feeds.php')*/?>
                </div>-->
            </div>
        </div>
    </div>
</section>


<?php get_footer(); ?>
