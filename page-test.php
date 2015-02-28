<?php
/*
Template Name: Test Page
Author: Juni Brosas @ iBoostme..
*/
get_header();
?>
<?php
//gold, copper, silver, platinum, palladium, zinc, aluminum
$metalSymbols = ['GLD', 'SCCO', 'SLV', 'PLG', 'PAL', 'CZN.TO', 'CENX'];
$metalQuotes = array();
foreach($metalSymbols as $symbol){
    $metalQuotes[] = yfGetQuote($symbol);
}

//trace($metalQuotes);

//crude oil, gasoline, fuel, lpg
$energySymbols = ['UCO', 'UGA', 'UGA', 'FUEL', 'LPG'];
$energyQuotes = array();
foreach( $energySymbols  as $symbol ){
    $energyQuotes[] = yfGetQuote($symbol);
}

foreach( $energySymbols  as $i => $symbol ){
    /*$percent = yfGetPercent($symbol['previousClose'], $symbol['last']);
    $status = $percent < 0 ? 'down' : 'up';
    $last = $symbol['last'];*/

    trace($symbol);
    $energyQuotes[] = yfGetQuote($symbol);

    //echo '<span class="item">'.$energyNames.' <span class="stat"><i class="fa fa-arrow-'.$status.'"></i>'.$last.' ('.str_replace('-','',$percent).'%)</span> </span>';
}

//trace( yfGetPercent($quoteData['previousClose'], $quoteData['last']) ); //this is the stock symbol ?>

<?php get_footer(); ?>
