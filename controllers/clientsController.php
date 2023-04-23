<?php
require_once __DIR__ . '/../models/Client.php';
session_start();

class clientsController
{

    private Client $model;

    public function __construct()
    {
        $this->model = new Client();
    }


    public function createUser(): void
    {
        $this->model->setValues();
        $this->model->createUserModel();
        $_SESSION['email'] = $_POST['email'];
        $_SESSION['password'] = $_POST['password'];
        header('Location: ../views/login.php');
    }

    public function validateUser($email, $password): void
    {
        $resultUser = $this->model->getUser($email, $password);
        if ($resultUser) {
            $_SESSION['email'] = $email;
            $_SESSION['password'] = $password;
            header('Location: ../views/home.php');
        } else {
            unset($_SESSION['email']);
            unset($_SESSION['password']);
            header('Location: ../views/login.php');
        }

    }
}