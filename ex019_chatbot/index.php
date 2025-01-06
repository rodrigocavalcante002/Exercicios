<?php 
require_once __DIR__.'/routes/routes.php';

$route = $_GET['route'] ?? 'home';
if(!in_array($route, $routes)){
    $route = 'err404';     
 }

switch($route){
    case $route == 'home': 
        include 'body/header.php';
        include 'home.php';
        include 'body/footer.php';
        break;
    case $route == 'login':
        include 'body/header.php';
        include 'login.php';
        include 'body/footer.php';
        break;
    case $route == 'err404';
        include 'body/header.php';
        include 'err404.php';
        include 'body/footer.php';
        break;
}


?>