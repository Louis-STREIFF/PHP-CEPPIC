<?php
function dg($value){
    echo "<pre>";
    var_dump($value);
    echo "</pre>";
}

function dd($value){
    echo "<pre>";
    var_dump($value);
    echo "</pre>";
    die();
}

function abort($statusCode) {
    http_response_code($statusCode);
    require "views/$statusCode.php";
}