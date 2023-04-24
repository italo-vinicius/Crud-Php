<?php
session_start();
require_once __DIR__ . '/../controllers/clientsController.php';

if (isset($_SESSION['email']) && isset($_SESSION['password'])) {
    if (!empty($_GET['id'] && $_GET['email'])) {
        $id = $_GET['id'];
        $user = new clientsController();
        $userGet = $user->getUser($id);

    } else {
        header('Location: ../views/login.php');
    }
} else {
    header('Location: ../views/login.php');

}

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
    <form action="../controllers/storeUser.php?id=<?= $userGet[0]['id'] ?>&email=<?= $userGet[0]['email'] ?>" method="post">
        <fieldset>
            <legend><b>Editar dados</b></legend>
            <br>

            <div class="inputBox">
                <input type="text" name="name" id="name" class="inputUser" required value="<?= $userGet[0]['name'] ?>">
                <label for="name" class="labelInput">Seu nome</label><br>
            </div>
            <br>
            <div class="inputBox">
                <input type="text" name="email" id="email" class="inputUser" required
                       value="<?= $userGet[0]['email'] ?>">
                <label for="email" class="labelInput">Email</label><br>
            </div>
            <br>
            <div class="inputBox">
                <input type="text" name="phone" id="phone" class="inputUser" required
                       value="<?= $userGet[0]['phone'] ?>">
                <label for="phone" class="labelInput">Telefone</label><br>
            </div>
            <br>
            <div class="inputBox">
                <input type="text" name="password" id="password" class="inputUser" required
                       value="<?= $userGet[0]['password'] ?>">
                <label for="password" class="labelInput">Senha</label>
            </div>
            <br>
            <br>


            <p>Sexo:</p>
            <input type="radio" name="genero" id="feminino"
                   value="feminino" <?= $userGet[0]['sexo'] == 'feminino' ? 'checked' : ''; ?> required>
            <label for="feminino">Feminino</label><br>
            <input type="radio" name="genero" id="masculino"
                   value="masculino" <?= $userGet[0]['sexo'] == 'masculino' ? 'checked' : ''; ?> required>
            <label for="masculino">Masculino</label><br>
            <input type="radio" name="genero" id="outro"
                   value="outro" <?= $userGet[0]['sexo'] == 'outro' ? 'checked' : ''; ?> required>
            <label for="outro">Outro</label>

            <br><br>

            <label for="data_nascimento"><b>Data de Nascimento</b></label>
            <input type="date" name="data_nascimento" id="data_nascimento" required
                   value="<?= $userGet[0]['data_nascimento'] ?>">
            <br> <br><br>

            <div class="inputBox">
                <input type="text" name="cidade" id="cidade" class="inputUser" required
                       value="<?= $userGet[0]['city'] ?>">
                <label for="cidade" class="labelInput">Cidade</label><br>
            </div>
            <br>
            <div class="inputBox">
                <input type="text" name="estado" id="estado" class="inputUser" required
                       value="<?= $userGet[0]['state'] ?>">
                <label for="estado" class="labelInput">Estado</label><br>
            </div>
            <br>
            <div class="inputBox">
                <input type="text" name="endereço" id="endereço" class="inputUser" required
                       value="<?= $userGet[0]['address'] ?>">
                <label for="endereço" class="labelInput">Endereço</label><br>
            </div>
            <br>
            <input type="hidden" name="id" value="<?= $userGet[0]['id'] ?>">
            <input type="submit" name="submit" id="submit" value="Editar">
        </fieldset>
    </form>
</div>
<br>

<a href="home.php">voltar</a>
</body>
</html>