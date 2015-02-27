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

    $symbol  = urlencode( trim( substr(strip_tags($symbol),0,7) ) );
    $yahooCSV = "http://download.finance.yahoo.com/d/quotes.csv?s=%40%5EDJI&f=sl1d1t1c1ohgvpnbaejkr";
    //$yahooCSV = "http://finance.yahoo.com/d/quotes.csv?s=%40%$symbol&f=sl1d1t1c1ohgvpnbaejkr&o=t";

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

//trace( getQuote("CLG12.ENYM") ); //this is the stock symbol
trace( getQuote("CLJ15%2NYM") ); //this is the stock symbol
//trace(fopen( "http://download.finance.yahoo.com/d/quotes.csv?s=%40%5EDJI,GOOG&f=nsl1op" ,"r"));
?>

<?php get_footer(); ?>
