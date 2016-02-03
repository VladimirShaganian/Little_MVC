<?php

class Main extends Controller
{
    public function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        $model = $this->model('my_model'); // подключение модели

        $lang = $this->i18n(); // подключение языков
        //var_dump($lang);

        $data[] = get_class($this) . ' Controller';

        $this->view('main', $data); // подключение views
    }
}