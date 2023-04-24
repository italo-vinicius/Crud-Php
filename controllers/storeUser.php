<?php
session_start();
if ((!empty($_SESSION['email'] && $_SESSION['password'])) && ($_SESSION['email'] !== null && $_SESSION['password'] !== null)) {

    require_once 'clientsController.php';
    $id = $_POST['id'];
    $name = $_POST['name'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];
    $city = $_POST['cidade'];
    $state = $_POST['estado'];
    $address = $_POST['endereço'];
    $sexo = $_POST['genero'];
    $data_nascimento = $_POST['data_nascimento'];
    $password = $_POST['password'];

    $store = new clientsController();
    $store->storeUser($id, $name, $phone, $email, $city, $state, $address, $sexo, $data_nascimento, $password);
    if ($_SESSION['email'] === $_GET['email']) {
        $_SESSION['email'] = $email;
        $_SESSION['password'] = $password;
    }
    header('Location: ../views/home.php');

} else {
    header('Location: ../views/login.php');
}