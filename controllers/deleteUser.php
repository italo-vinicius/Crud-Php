<?php
session_start();
if (!empty($_SESSION['email'] && $_SESSION['password'])) {
    require_once 'clientsController.php';
    $user = new clientsController();
    $id = $_GET['id'];
    $user->deleteUser($id);
    if ($_SESSION['email'] === $_GET['email']) {
        unset($_SESSION['email']);
        header('Location: /../views/home.php');
    }
    header('Location: /../views/home.php');

} else {
    header('Location: /../views/login.php');
}