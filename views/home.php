<?php
session_start();
if (!isset($_SESSION['email']) && !isset($_SESSION['password'])) {
    header('Location: ../views/login.php');
}
require_once __DIR__ . '/../controllers/clientsController.php';

$log = $_SESSION['email'];
$users = new clientsController();
$usersGet = $users->getUsers();
?>

<!doctype html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <style>
        <?= include('css/showUsers.css'); ?>
    </style>
    <title>Clients</title>
</head>
<body>
<nav class="navbar navbar-expand-lg bg-body-tertiary bg-dark">
    <div class="container-fluid ">
        <a href="" class="navbar-brand">CRUD MANEIRO</a>
    </div>
    <div class="d-flex">
        <a href="../controllers/logout.php" class="btn btn-danger me-5">SAIR</a>
    </div>
</nav>
<?= "<h1 id='welcome'>Bem vindo <u>$log</u> </h1>"; ?>
<div class="table-responsive m-5">
    <table class="table mt-5  bg-light table-striped table-bordered table-sm">
        <thead class="table-dark">
        <tr>
            <th scope="col">Nome</th>
            <th scope="col">Telefone</th>
            <th scope="col">Email</th>
            <th scope="col">Cidade</th>
            <th scope="col">Estado</th>
            <th scope="col">Endereço</th>
            <th scope="col">Sexo</th>
            <th scope="col">Data de Nascimento</th>
        </tr>
        </thead>
        <tbody class="table-group-divider">

        <?php

        // Corpo da tabela com os dados do array
        foreach ($usersGet as $user) {
            echo '<tr>';
            echo '<td>' . $user["name"] . '</td>';
            echo '<td>' . $user["phone"] . '</td>';
            echo '<td>' . $user["email"] . '</td>';
            echo '<td>' . $user["city"] . '</td>';
            echo '<td>' . $user["state"] . '</td>';
            echo '<td>' . $user["address"] . '</td>';
            echo '<td>' . $user["sexo"] . '</td>';
            echo '<td>' . $user["data_nascimento"] . '</td>';
            echo '</tr>';
        }


        ?>
        </tbody>
    </table>
</div>
<br>
</body>
</html>