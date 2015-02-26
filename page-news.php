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
                <div class="well well-products well-main" style="min-height: 712px;">
                    <div class="row">
                        <div class="col-md-2" style="padding-right: 0;  margin-top: 25px;"><h2 class="title">News <i class="fa fa-angle-double-right"></i> </h2></div>
                        <div class="col-sm-9 news-list" style="padding-left: 0;">
                            <h2 class="title news-title">Oil & Gas</h2>
                            <?php for($i = 0; $i < 5; $i++):?>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="news-item">
                                            <div class="news-date"><i class="fa fa-clock-o"></i> 2 hours ago</div>
                                            <div class="news-item-title">Transocean posts loss on important charge</div>
                                        </div>
                                    </div>
                                </div>
                            <?php endfor ?>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="well well-products-sidebar">
                    <h2 class="title" style="margin-bottom: 10px;">Commodity Index</h2>
                    <table class="table table-striped commodity-table">
                        <tr>
                            <td>Crude Oil</td>
                            <td>50.55</td>
                            <td><i class="fa fa-caret-down"></i></td>
                            <td>-0.44</td>
                        </tr>
                        <tr>
                            <td>Crude Oil</td>
                            <td>50.55</td>
                            <td><i class="fa fa-caret-down"></i></td>
                            <td>-0.44</td>
                        </tr>
                        <tr>
                            <td>Crude Oil</td>
                            <td>50.55</td>
                            <td><i class="fa fa-caret-down"></i></td>
                            <td>-0.44</td>
                        </tr>
                        <tr>
                            <td>Crude Oil</td>
                            <td>50.55</td>
                            <td><i class="fa fa-caret-down"></i></td>
                            <td>-0.44</td>
                        </tr>
                        <tr>
                            <td>Crude Oil</td>
                            <td>50.55</td>
                            <td><i class="fa fa-caret-down"></i></td>
                            <td>-0.44</td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
    </div>
</section>


<?php get_footer(); ?>
