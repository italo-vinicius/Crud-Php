<?php


require_once './models/Client.php';

class clientsController
{

    private Client $model;

    public function __construct()
    {
        $this->model = new Client();
    }

    public function getAll(): void

    {
        $resultData = $this->model->getAllDate();
        print_r($resultData);
    }
}