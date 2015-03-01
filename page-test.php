<?php
/*
Template Name: Test Page
Author: Juni Brosas @ iBoostme..
*/
get_header();
?>
<?php

$metalQuotes = array();
foreach($metalSymbols as $symbol){
    $metalQuotes[] = yfGetQuote($symbol);
}

//trace($metalQuotes);

//crude oil, gasoline, fuel, lpg
$energyNames = ['Crude Oil', 'Gasoline', 'Fuel', 'LPG'];
$energySymbols = ['UCO', 'UGA', 'FUEL', 'LPG'];
$energyQuotes = array();
foreach( $energySymbols  as $i => $symbol ){
    $quote = yfGetQuote($symbol);

    $name = $energyNames[$i];
    $percent = yfGetPercent($quote['previousClose'], $quote['last']);
    $status = $percent < 0 ? 'down' : 'up';
    $last = $quote['last'];

    $energyQuotes[] = $quote;


    echo '<span class="item">'.$name.' <span class="stat"><i class="fa fa-arrow-'.$status.'"></i>'.$last.' ('.str_replace('-','',$percent).'%)</span> </span>';
}

//trace( yfGetPercent($quoteData['previousClose'], $quoteData['last']) ); //this is the stock symbol ?>

<?php get_footer(); ?>
