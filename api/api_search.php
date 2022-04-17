<?php

error_reporting(0);

function cURL($url){
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
    curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
    return $exec = curl_exec($ch);
}

function Notify_($level){

    $lang_user = substr($_SERVER['HTTP_ACCEPT_LANGUAGE'], 0, 2);

    if($level == "pattern"){
        if($lang_user == "pt"){
            print("<span style='font-family:Helvetica;'><center>Você provavelmente esqueceu de passar algum parâmetro ou o valor dele. Não sabe como passar parâmetros? <strong><a href='../pt/docs' style='color: blue;'>Clique aqui!</a><strong></center><span>");
        }
    
        else{
            print("<span style='font-family:Helvetica;'><center>You probably forgot to pass some parameter or its value. Don't know how to pass parameters?<strong><a href='../en/docs' style='color: blue;'> Click here!</a><strong></center><span>");
        }
    }

    elseif($level == "dangerous"){

        if($lang_user == "pt"){
            print("<span style='font-family:Helvetica;'><center>Há uma grande probabilidade de você ter inserido uma criptomoeda ou/e moeda fiat inválida. Para saber mais, visite a nossa <strong><a href='../pt/docs' style='color: blue;'>documentação.</a><strong></center><span>");
        }
    
        else{
            print("<span style='font-family:Helvetica;'><center>There is a high probability that you have entered an invalid cryptocurrency and/or fiat currency. To learn more, visit our <strong><a href='../en/docs' style='color: blue;'>documentation.</a><strong></center><span>");
        }
    }
    else{

        if($lang_user == "pt"){
            print("Você provavelmente esqueceu de passar algum parâmetro ou o valor dele. Não sabe como passar parâmetros? Clique aqui!");
        }
    
        else{
            print("GRINGO PO");
        }
    }
    
}


$coin_thick = $_GET['coin'];
$fiat_thick = $_GET['fiat'];

if(isset($coin_thick, $fiat_thick)){
    
    $api_binance =  cURL('https://api.binance.com/api/v3/ticker/24hr?symbol='.$coin_thick.''.$fiat_thick.'');
    $jsn = json_decode($api_binance, true);
    $code = $jsn['code'];
    if($code == '-1121'){
        Notify_("dangerous");
    }
    else{
        print($api_binance);
    }

}
else{
    Notify_("pattern");
}

?>