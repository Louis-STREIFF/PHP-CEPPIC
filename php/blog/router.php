<?php
require "./utils/functions.php";
$config = require 'config.php';


$uri = parse_url($_SERVER["REQUEST_URI"], component: PHP_URL_PATH);

if (array_key_exists($uri, $config)) {
    require $config[$uri];
} else {
    abort(404);
}
