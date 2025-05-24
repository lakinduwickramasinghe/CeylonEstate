<?php
session_start();
$route = require_once '../routes/route.php'; 
$controllerName = ucfirst($route['controller']) . 'Controller';
$method = $route['method'];
$controllerFile = '../app/controllers/' . $controllerName . '.php';
if (file_exists($controllerFile)) {
    require_once $controllerFile;

    if (class_exists($controllerName)) {
        $controller = new $controllerName();

        if (method_exists($controller, $method)) {
            $params = array_slice($route['segments'], 2);
            call_user_func_array([$controller, $method], $params);
        } 
    } 
} else {
    http_response_code(404);
    require_once '../app/views/404.php';
}