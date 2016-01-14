<?php

class App
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

        if (!empty($uri_segment[3]))
        {
            $property = $uri_segment[3];
        }


        $controller_file = $_SERVER['DOCUMENT_ROOT'] . '/app/controllers/' . ucfirst($controller) . 'Controller.php';

        if (file_exists($controller_file)) {
            include $controller_file;
        } else {
            $this->ErrorPage404();
        }

        $controller = new $controller;

        if (method_exists($controller, $method)) {
            $controller->$method();
        }



    }

    function ErrorPage404()
    {
        $host = 'http://'.$_SERVER['HTTP_HOST'].'/';
        header('HTTP/1.1 404 Not Found');
        header("Status: 404 Not Found");
        header('Location:'.$host.'404');
    }
}