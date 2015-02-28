<?php
/*
Template Name: Test Page
Author: Juni Brosas @ iBoostme..
*/
get_header();
?>
<?php
$quoteData = yfGetQuote("SCO");
trace( $quoteData['previousClose'], $quoteData['last'] ); //this is the stock symbol
?>

<?php get_footer(); ?>
