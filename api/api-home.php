<?php
error_reporting(0);

function cURL($url){
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    return $rt = curl_exec($ch);
}
$btc = cURL('https://api.binance.com/api/v3/ticker/24hr?symbol=BTCUSDT');
$eth = cURL('https://api.binance.com/api/v3/ticker/24hr?symbol=ETHUSDT');
$bnb = cURL('https://api.binance.com/api/v3/ticker/24hr?symbol=BNBUSDT');
/**/
$jsn_btc = json_decode($btc, true);
$jsn_eth = json_decode($eth, true);
$jsn_bnb = json_decode($bnb, true);

$price_percent_btc = number_format($jsn_btc['priceChangePercent'], 2);
$var_last_price_btc = number_format($jsn_btc['lastPrice'], 2); 
$var_price_percent_btc = "$price_percent_btc%";

if($var_price_percent_btc < 0){
    $btc_img = "<img alt='Chart State 01' style='filter: hue-rotate(200deg);' src='../assets/images/chart-state.png'>";
}
else{
    $btc_img = "<img alt='Chart State 01' src='../assets/images/chart-state.png'>";
}
/**/

$price_percent_eth = number_format($jsn_eth['priceChangePercent'], 2);
$var_last_price_eth = number_format($jsn_eth['lastPrice'], 2); 
$var_price_percent_eth = "$price_percent_eth%";
/**/

if($var_price_percent_eth < 0){
    $eth_img = "<img alt='Chart State 02' style='filter: hue-rotate(200deg);' src='../assets/images/chart-state-02.png'>";
}
else{
    $eth_img = "<img alt='Chart State 02' src='../assets/images/chart-state-02.png'>";
}

$price_percent_bnb = number_format($jsn_bnb['priceChangePercent'], 2);
$var_last_price_bnb = number_format($jsn_bnb['lastPrice'], 2); 
$var_price_percent_bnb = "$price_percent_bnb%";

if($var_price_percent_bnb < 0){
    $bnb_img = "<img alt='Chart State 03' style='filter: hue-rotate(200deg);' src='../assets/images/chart-state-03.png'>";
}
else{
    $bnb_img = "<img alt='Chart State 03' src='../assets/images/chart-state-02.png'>";
}
?>