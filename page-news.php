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
                <div class="well well-products well-main" style="min-height: 285px;">
                    <div class="row">
                        <div class="col-md-2"><h2 class="title">News <i class="fa fa-angle-double-right"></i> </h2></div>
                        <div class="col-sm-10 news-list">
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
                    <h2 class="title">News</h2>
                    <ul class="list-unstyled recent">
                        <li><a href="#">January 6, 2015</a><p>Fuel Oil will increase next year</p></li>
                        <li><a href="#">January 6, 2015</a><p>Fuel Oil will increase next year</p></li>
                    </ul>

                    <button class="btn btn-primary btn-blue btn-lg">READ MORE</button>
                </div>
            </div>
        </div>
    </div>
</section>


<?php get_footer(); ?>
