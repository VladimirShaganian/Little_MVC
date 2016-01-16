<?php

class Main extends Controller
{
    public function index()
    {


        $model = $this->model('my_model'); // подключение модели

        $data = ["Little MVC Framework"];

        $this->view('main', $data); // подключение views

    }
}