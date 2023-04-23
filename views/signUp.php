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
    <title>Cadastrar</title>
    <style>
        <?= include('css/singUp.css'); ?>
    </style>
</head>
<body>
<div class="box">
    <form action="../controllers/createUser.php" method="post">
        <fieldset>
            <legend><b>Cadastre-se</b></legend>
            <br>

            <div class="inputBox">
                <input type="text" name="name" id="name" class="inputUser" required>
                <label for="name" class="labelInput">Seu nome</label><br>
            </div><br>
            <div class="inputBox">
                <input type="text" name="email" id="email" class="inputUser" required>
                <label for="email" class="labelInput">Email</label><br>
            </div><br>
            <div class="inputBox">
                <input type="text" name="phone" id="phone" class="inputUser" required>
                <label for="phone" class="labelInput">Telefone</label><br>
            </div><br>
            <div class="inputBox">
                <input type="text" name="password" id="password" class="inputUser" required>
                <label for="password" class="labelInput">Senha</label>
            </div><br>
            <br>


            <p>Sexo:</p>
            <input type="radio" name="genero" id="feminino" value="feminino" required>
            <label for="feminino">Feminino</label><br>
            <input type="radio" name="genero" id="masculino" value="masculino" required>
            <label for="masculino">Masculino</label><br>
            <input type="radio" name="genero" id="outro" value="outro" required>
            <label for="outro">Outro</label>
            <br><br>

            <label for="data_nascimento"><b>Data de Nascimento</b></label>
            <input type="date" name="data_nascimento" id="data_nascimento" required>
            <br> <br><br>

            <div class="inputBox">
                <input type="text" name="cidade" id="cidade" class="inputUser" required>
                <label for="cidade" class="labelInput">Cidade</label><br>
            </div><br>
            <div class="inputBox">
                <input type="text" name="estado" id="estado" class="inputUser" required>
                <label for="estado" class="labelInput">Estado</label><br>
            </div><br>
            <div class="inputBox">
                <input type="text" name="endereço" id="endereço" class="inputUser" required>
                <label for="endereço" class="labelInput">Endereço</label><br>
            </div><br>

            <input type="submit" name="submit" id="submit" value="Enviar">
        </fieldset>
    </form>
</div>
<br>

<a href="login.php">voltar</a>
</body>
</html>