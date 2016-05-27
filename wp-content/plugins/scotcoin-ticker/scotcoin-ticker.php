<?php

/*
Plugin Name: Scotcoin Ticker
Description: Adds a shortcode to display a Scotcoin ticker
Author: dooglet
*/

function scotcoin_ticker() {
    $api_request    = 'http://bittrex.com/api/v1.1/public/getmarketsummary?market=btc-scot';
    $api_response = wp_remote_get( $api_request );
    $api_data = json_decode( wp_remote_retrieve_body( $api_response ), true );

    $scot_btc = $api_data['result'][0]['Last'];


    $api_request    = 'http://api.coindesk.com/v1/bpi/currentprice.json';
    $api_response = wp_remote_get( $api_request );
    $api_data = json_decode( wp_remote_retrieve_body( $api_response ), true );

    $btc_gbp = $api_data['bpi']['GBP']['rate'];
    $scot_gbp = 1000 * $scot_btc * $btc_gbp;

    $ret = "SCOT/BTC: " . number_format($scot_btc, 8) . " | BTC/GBP: &pound;" . number_format($btc_gbp, 2) . " | 1000 SCOT/GBP: &pound;" . $scot_gbp;

    return $ret;
}

add_shortcode('scotcoin-ticker', 'scotcoin_ticker');