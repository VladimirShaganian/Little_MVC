<?php

class Main extends Controller
{
    public function index()
    {


        $model = $this->model('my_model'); // подключение модели

        $data[] = get_class($this) . 'Controller';



        $this->view('main', $data); // подключение views

    }
}