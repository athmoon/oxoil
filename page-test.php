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
$energySymbols = ['UCO', 'UGA', 'FUEL', 'LPG'];
$energyQuotes = array();
foreach( $energySymbols  as $symbol ){
    $energyQuotes[] = yfGetQuote($symbol);
}

$quoteData = yfGetQuote('LPG');
trace( yfGetPercent($quoteData['previousClose'], $quoteData['last']) ); //this is the stock symbol ?>

<?php get_footer(); ?>
