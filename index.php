<?php

require_once './controllers/clientsController.php';
$controller = new clientsController();
$action = !empty($_GET['action']) ? $_GET['action'] : 'getAll';
$controller->{$action}();

$controller->createUser();

