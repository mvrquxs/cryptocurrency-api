<?php
error_reporting(0);

$lang = substr($_SERVER['HTTP_ACCEPT_LANGUAGE'], 0, 2);

function cURL($url){
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
    curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
    return $exec = curl_exec($ch);
}


$coin = $_GET['coin'];
$fiat = $_GET['fiat'];

$qnt_str = strlen($coin);

if($qnt_str == 7){
    $coin = substr($coin, 0, -4);
}

if(isset($coin, $fiat)){
    $empty_test = empty($coin and $fiat);
    if($empty_test == "1"){
        if($lang == "pt"){
            print_r("<center>Você provavelmente esqueceu de passar o valor do parâmetro. Ex: ?coin=USDT. Tente passar o parâmetro e o valor dele. <a href='../../pt/docs'>Clique aqui para ver alguns tutoriais.</a></center>");
        }
        else{
            print_r("<center>You probably forgot to pass the parameter value. Ex: ?coin=USDT. Try to pass the parameter and its value. <a href='../../en/docs'>Click here for some tutorials.</a></center>");
        }
    }
    else{
        $var_fiat = $fiat;
        print cURL('https://api.binance.com/api/v3/ticker/24hr?symbol='.$coin.''.$var_fiat.'');
    }
}
elseif(isset($coin)){
    $empty_test = empty($coin);
    if($empty_test == 1){
        if($lang == "pt"){
            print_r("<center>Você provavelmente esqueceu de passar o valor do parâmetro. Ex: ?coin=USDT. Tente passar o parâmetro e o valor dele. <a href='../../pt/docs'>Clique aqui para ver alguns tutoriais.</a></center>");
        }
        else{
            print_r("<center>You probably forgot to pass the parameter value. Ex: ?coin=USDT. Try to pass the parameter and its value. <a href='../../en/docs'>Click here for some tutorials.</a></center>");
        }
    }
    else{
        $var_fiat = "USDT";
        print cURL('https://api.binance.com/api/v3/ticker/24hr?symbol='.$coin.''.$var_fiat.'');
    }

}
elseif(isset($fiat)){
    if($lang == "pt"){
        print_r("<center>Você apenas está passando o parâmetro fiat. Tente passar o parâmetro coin para definir uma moeda. <a href='../../pt/docs'>Clique aqui para ver alguns tutoriais.</a></center>");
    }
    else{
        print_r("<center>You are not passing any parameters. <a href='../../en/docs'>Click here to see some tutorials.</a></center>");
    }
}
else{
    if($lang == "pt"){
        print_r("<center>Você não está passando nenhum parâmetro. <a href='../../pt/docs'>Clique aqui para ver alguns tutoriais.</a></center>");
    }
    else{
        print_r("<center>You are not passing any parameters. <a href='../../en/docs'>Click here to see some tutorials.</a></center>");
    }
    
}

?>
