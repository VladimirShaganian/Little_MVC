<?php

/**
 * Class Main
 *
 * @todo добавить передачу переменных во views
 */
class Main extends Controller
{
    public function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        $this->render('main');
    }

}