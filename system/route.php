<?php

class Route
{
    public function init() {

        $controller = 'Main';
        $method = 'index';

        $uri = parse_url($_SERVER['REQUEST_URI']);

        $uri_segment = explode('/', $uri['path']);

        if (!empty($uri_segment[1]))
        {
            $controller = $uri_segment[1];
        }

        if (!empty($uri_segment[2]))
        {
            $method = $uri_segment[2];
        }

        $controller_file = $_SERVER['DOCUMENT_ROOT'] . '/app/controllers/' . ucfirst($controller) . 'Controller.php';

        if (file_exists($controller_file)) {
            require_once $controller_file;
        }

        $controller = new $controller;

        if (method_exists($controller, $method)) {
            $controller->$method();
        }
    }
}