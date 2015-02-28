<?php
/*
Template Name: Test Page
Author: Juni Brosas @ iBoostme..
*/
get_header();
?>
<?php
//gold, copper, silver, platinum, palladium, zinc
$metalSymbols = ['GLD', 'SCCO', 'SLV', 'PLG', 'PAL', 'CZN.TO'];
$metalQuotes = array();
foreach($metalSymbols as $symbol){
    $metalQuotes[] = yfGetQuote($symbol);
}

trace($metalQuotes);

//crude oil
$energySymbols = ['UCO'];

$quoteData = yfGetQuote("SCO");
trace( yfGetPercent($quoteData['previousClose'], $quoteData['last']) ); //this is the stock symbol

?>

<?php get_footer(); ?>
