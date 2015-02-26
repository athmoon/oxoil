<?php
/*
Template Name: Product Menu Page
Author: Juni Brosas @ iBoostme
*/

get_header();
$args = [
    'parent' => 8
];
$pages = get_pages( $args );

// get the pages of the products
foreach($pages as $page ){
    $title = $page->post_title;
    $url = get_page_link($page->ID);
}
$images = [
    'feature_agriculture.jpg',
    'feature_metal.jpg',
    'feature_oil_products.jpg'
];
?>
    <div class="space-lg"></div>
    <section class="container featured-products">
        <div class="box">
            <h2 class="no-background void-top full-width"><span>Products</span></h2>
            <div class="space-md"></div>

            <div class="row product-headers">
                <?php foreach($pages as $i => $page ){
                    $title = $page->post_title;
                    $url = get_page_link($page->ID); ?>

                    <div class="col-xs-4 item">

                        <a href="<?=$url?>">
                            <img src="<?=asset('images/').$images[$i]?>" alt="<?=$title?>" class="img-responsive border-frame"/>
                            <div class="space"></div>
                            <p><?=$title?></p>
                        </a>
                    </div>

                <?php }?>
            </div>
        </div>
    </section>
<?php get_footer();
