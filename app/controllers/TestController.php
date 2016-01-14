<?php

/**
 * Class Test
 *
 */
class Test extends Controller
{
    public function __construct()
    {
        parent::__construct();
    }

    public function index() {
        $this->render('test');
    }

}
