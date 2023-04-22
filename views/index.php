<!doctype html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <style>
        <?= include('css/style.css'); ?>
    </style>
    <title>Clients</title>
</head>
<body>
<h1>Clients List</h1>
<div class="content">
    <table class="table">
        <thead>
        <tr>
            <th>ID</th>
            <th>NAME</th>
            <th>EMAIL</th>
            <th>PHONE</th>
        </tr>
        </thead>
        <tbody>
        <?php foreach ($resultData as $data): ?>
        <tr class="line">
            <td> <?= $data['id'] ?> </td>
            <td> <?= $data['name'] ?> </td>
            <td> <?= $data['email'] ?> </td>
            <td> <?= $data['phone'] ?> </td>
        </tr>
        <?php endforeach; ?>
        </tbody>
    </table>
</div>

</body>
</html>