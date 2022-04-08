<?php

require "header.php";

require 'core.php';

if (strlen($_SERVER['REQUEST_URI']) > 1) {
    $uri = $_SERVER['REQUEST_URI'];
    $uri = str_replace('/view/', '', $uri);
    $uri = '/view' . $uri. '.php';
    if(file_exists(".$uri")){
        require_once ".$uri";
    }else{
        $uri = '/view/indexView.php';
    }

} else {
    $uri = '/view/indexView.php';
}

require_once ".$uri";

require "footer.php";