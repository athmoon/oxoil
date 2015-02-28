<?php
/*
Template Name: Test Page
Author: Juni Brosas @ iBoostme..
*/
get_header();
?>

<?php

function getQuote($symbol)
{

    //$symbol  = urlencode( trim( substr(strip_tags($symbol),0,7) ) );
    //$yahooCSV = "http://download.finance.yahoo.com/d/quotes.csv?s=GLD,SCO&f=sl1d1t1c1ohgvpnbaejkr";
    $yahooCSV = "http://finance.yahoo.com/d/quotes.csv?s=$symbol&f=sl1d1t1c1ohgvpnbaejkrl1d1p2&o=t";

    $csv = fopen($yahooCSV,"r");

    if($csv)
    {
        list($quote['symbol'], $quote['last'], $quote['date'], $quote['timestamp'], $quote['change'], $quote['open'],
            $quote['high'], $quote['low'], $quote['volume'], $quote['previousClose'], $quote['name'], $quote['bid'],
            $quote['ask'], $quote['eps'], $quote['YearLow'], $quote['YearHigh'], $quote['PE']) = fgetcsv($csv, ',');

        fclose($csv);

        return $quote;
    }
    else
    {
        return false;
    }
}

trace( getQuote("GLD") ); //this is the stock symbol
trace( getQuote("SCO") ); //this is the stock symbol
?>

<?php get_footer(); ?>
