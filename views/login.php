<?php
session_start();
?>
<!doctype html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <style>
        <?= include('css/login.css'); ?>
    </style>
    <title>Homepage</title>
</head>
<body>
<main>
    <h1>Login</h1>

    <form action="../controllers/userAuth.php" method="post" autocomplete="off">
        <div class="formLogin">
            <label for="email">Email</label>
            <input type="text" name="email" id="email" required placeholder="example@email.com"
                   value="<?= $_SESSION['email'] ?>">
            <br><br>
            <label for="password">Senha</label>
            <input type="password" id="password" name="password" required placeholder="********"
                   value="<?= $_SESSION['password'] ?>">
            <input type="submit" id="login" value="Login">
        </div>
    </form>


    <div class="box">
        <a href="signUp.php" id="singUp">Cadastre-se</a>
    </div>
</main>
</body>
</html>