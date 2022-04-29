<?php

use AltoRouter as Alt;
use App\Controller\DefaultController;

require __DIR__ . '/vendor/autoload.php';

$router = new Alt();

// map homepage
$router->map('GET', '/', function () {
    DefaultController::homePage();
});

// map test
$router->map('GET', '/test', function () {
    DefaultController::test();
});

// match current request url
$match = $router->match();

// call closure or throw 404 status
if (is_array($match) && is_callable($match['target'])) {
    call_user_func_array($match['target'], $match['params']);
} else {
    // no route was matched
    header($_SERVER["SERVER_PROTOCOL"] . ' 404 Not Found');
    DefaultController::error404();
}
