<?php
if (!isset($_SESSION['email']) && !isset($_SESSION['password'])) {
    header('Location: ../views/login.php');
}
$log = $_SESSION['email'];

?>

<!doctype html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <style>
        <?= include('css/showUsers.css'); ?>
    </style>
    <title>Clients</title>
</head>
<body>
<nav class="navbar navbar-expand-lg bg-body-tertiary bg-dark" >
    <div class="container-fluid ">
        <a href="" class="navbar-brand">CRUD MANEIRO</a>
    </div>
    <div class="d-flex">
        <a href="../controllers/logout.php" class="btn btn-danger me-5">SAIR</a>
    </div>
</nav>

<?php
    echo "<h1 id='welcome'>Bem vindo <u>$log</u> </h1>"
?>
<br>
</body>
</html>