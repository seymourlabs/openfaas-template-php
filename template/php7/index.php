<?php

// Requires Core composer's autoload
if (file_exists('vendor/autoload.php')) {
    require('vendor/autoload.php');
}

// Requires Function composer's autoload
require('function/vendor/autoload.php');

$stdin = file_get_contents("php://stdin");
$h = (new App\Handler())->handle($stdin);
