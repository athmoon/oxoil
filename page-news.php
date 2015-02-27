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

                            <?php echo do_shortcode('[wp-rss-aggregator]') ?>

                            <?php /*for($i = 0; $i < 5; $i++):*/?><!--
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="news-item">
                                            <div class="news-date"><i class="fa fa-clock-o"></i> 2 hours ago</div>
                                            <div class="news-item-title">Transocean posts loss on important charge</div>
                                        </div>
                                    </div>
                                </div>
                            --><?php /*endfor */?>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="well well-products-sidebar" style="padding: 15px;">
                    <h2 class="title" style="margin-bottom: 10px;">Commodity Index</h2>
                    <table class="table table-striped commodity-table">
                        <tr>
                            <td>Crude Oil</td>
                            <td>0.87</td>
                            <td><i class="fa fa-caret-up"></i></td>
                            <td>1.81%</td>
                        </tr>
                        <tr>
                            <td>Heating Oil</td>
                            <td>0.03</td>
                            <td><i class="fa fa-caret-up"></i></td>
                            <td>1.40%</td>
                        </tr>
                        <tr>
                            <td>RBOB Gasoline</td>
                            <td>0.02</td>
                            <td><i class="fa fa-caret-up"></i></td>
                            <td>1.08%</td>
                        </tr>
                        <tr>
                            <td>Natural Gas</td>
                            <td>0.01 </td>
                            <td><i class="fa fa-caret-up"></i></td>
                            <td>0.19%</td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
    </div>
</section>


<?php get_footer(); ?>
