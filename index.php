<?php
    $lang =  substr($_SERVER['HTTP_ACCEPT_LANGUAGE'], 0, 2);
    if ($lang == 'pt'){
        header("location: pt");
    }
    else{
        header('location: en');
    }
?>