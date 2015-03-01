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
    $answer = $answer / $previousClose;

    // Multiply this result by 100 to calculate the stock’s net change percentage.
    $answer = $answer * 100;

    return round($answer, 2);
}

function yfFormatQuotes($names, $symbols ){
    $names = $names;
    $symbols = $symbols;
    $quotes = array();

    foreach( $symbols  as $i => $symbol ){
        $quote = yfGetQuote($symbol);

        $name = $names[$i];
        $percent = yfGetPercent($quote['previousClose'], $quote['last']);

        $quote['descriptiveName'] = $name;
        $quote['currentPercent'] = $percent;
        $quote['arrowStatus'] = $percent < 0 ? 'down' : 'up';

        $quotes[] = $quote;
    }

    return $quotes;
}

function getEnergyQuotes(){
    // crude oil, gasoline, fuel, lpg
    $energyNames = ['Crude Oil', 'Gasoline', 'Fuel', 'LPG'];
    $energySymbols = ['UCO', 'UGA', 'FUEL', 'LPG'];

    return yfFormatQuotes( $energyNames, $energySymbols );
}

function getMetalQuotes(){
    // gold, copper, silver, platinum, palladium, zinc, aluminum
    $metalNames = ['Gold', 'Copper', 'Silver', 'Platinum', 'Palladium', 'Zinc', 'Aluminum'];
    $metalSymbols = ['GLD', 'SCCO', 'SLV', 'PLG', 'PAL', 'CZN.TO', 'CENX'];

    return yfFormatQuotes($metalNames, $metalSymbols);
}