<?php

function yfGetQuote($symbol)
{
    $yahooCSV = "http://finance.yahoo.com/d/quotes.csv?s=$symbol&f=sl1d1t1c1ohgvpnbaejkrl1d1p2k2&o=t";
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

function yfGetPercent($lastPrice, $previousClose){

    // Subtract the previous close from the current price.
    $answer = ($previousClose - $lastPrice);

    // Divide this result by the previous close.


    trace('asdasd');
    die();

    $answer = $answer / $previousClose;


    // Multiply this result by 100 to calculate the stock’s net change percentage.
    $answer = $answer * 100;

    return round($answer, 2);
}