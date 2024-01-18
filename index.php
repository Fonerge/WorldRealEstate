<?php

require_once ('admin/auth_func.php');

$routes = [];

route('/', function () {
  require "pages/main.php";
});

route('/about', function () {
  require "pages/about.php";
});

route('/estate', function () {
  require "pages/property.php";
});

route('/contact', function () {
  require "pages/contact.php";
});


route('/privacy', function () {
  require "pages/privacy.php";
});


route('/404', function () {
  require "404.php";
});


/*function*/
function route(string $path, callable $callback) {
  global $routes;
  $routes[$path] = $callback;
}

run();

function run() {
  global $routes;
  $uri = $_SERVER['REQUEST_URI'];
  $found = false;
  foreach ($routes as $path => $callback) {
    if ($path !== $uri) continue;

    $found = true;
    $callback();
  }

  if (!$found) {
    $notFoundCallback = $routes['/404'];
    $notFoundCallback();
  }
}

?>