<?php

class Controller {

    public function __construct()
    {

    }

    public function render($view)
    {
        $view_file = $view . '.php';
        require_once $_SERVER['DOCUMENT_ROOT'] . '/app/views/' . $view_file;
    }

}