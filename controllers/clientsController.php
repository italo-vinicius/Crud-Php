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

    public function getUsers(): array|false

    {
        return $this->model->getAllUsers();
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

    public function getUser(string $id): false|array
    {
        return $this->model->getUserById($id);
    }

    public function storeUser(int $id ,string $name, string $phone, string $email, string $city, string $state, string $address, string $sexo, string $data_nascimento, string $password): false|array
    {
        return $this->model->storeUser($id, $name, $phone, $email, $city, $state, $address, $sexo, $data_nascimento, $password);
    }
}