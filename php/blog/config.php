<?php

//return "Envoie texte";

//if ($uri === "/") {
//    require "controllers/index.php";
//} elseif ($uri === "/about") {
//    require "controllers/about.php";
//} elseif ($uri === "/contact") {
//    require "controllers/contact.php";
//}
//echo $config;

return [
    "routes" => [
        '/' => 'controllers/index.php',
        '/about' => 'controllers/about.php',
        '/contact' => 'controllers/contact.php',
    ]
];