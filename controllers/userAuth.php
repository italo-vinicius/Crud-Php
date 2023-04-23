<?php
if (!empty($_POST['email']) && !empty($_POST['password'])) {
    //User Ok
    require 'clientsController.php' ;
    $email = $_POST['email'];
    $password = $_POST['password'];
    $user = new clientsController();
    $user->validateUser($email, $password);
} else {
    //Redirect
    header('Location: ../views/login.php');

}