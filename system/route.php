<?php

class Route
{
    static function controller_init() {

        $controller = 'Main';

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

        $controller_file = ( ucfirst($controller) . 'Controller.php' );

        header("Location: /application/controllers/".$controller_file);

    }
}