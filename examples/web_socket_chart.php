<?php

require_once( '../vendor/autoload.php' ) ;

//require '../php-binance-api.php';

// @see home_directory_config.php
// use config from ~/.confg/jaggedsoft/php-binance-api.json
$api = new Binance\API();

// Get complete realtime chart data via WebSockets
$api->chart(["BNBBTC"], "15m", function($api, $symbol, $chart) {
    echo "{$symbol} chart update\n";
    print_r($chart);
});
