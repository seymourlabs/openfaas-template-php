<?php

// Requires Core composer's autoload
if (file_exists('vendor/autoload.php')) {
    require('vendor/autoload.php');
}

// Requires Function composer's autoload
if (file_exists('function/vendor/autoload.php')) {
    require('function/vendor/autoload.php');
}

$stdin = file_get_contents("php://stdin");
$response = (new App\Handler())->handle($stdin);
echo $response;
