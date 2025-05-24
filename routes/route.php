<?php
    $requestPath = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
    $scriptPath = dirname($_SERVER['SCRIPT_NAME']);
    if (stripos($requestPath, $scriptPath) === 0) {
        $requestPath = substr($requestPath, strlen($scriptPath));
    }
    $segments = explode('/', trim($requestPath, '/'));
    $controller = !empty($segments[0]) ? $segments[0] : 'home';
    $method     = !empty($segments[1]) ? $segments[1] : 'load';
    $route =  [
        'controller' => $controller,
        'method'     => $method,
        'segments'   => $segments
    ];
    return $route;

    