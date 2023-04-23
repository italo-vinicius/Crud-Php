<?php
require_once './models/Client.php';
require_once './controllers/clientsController.php';

session_start();


$action = !empty($_GET['action']) ? $_GET['action'] : 'loginForm';

switch ($action) {
    case 'loginForm':
        header('Location: views/login.php');
        break;
    default:
        echo '<style> body {background-image: linear-gradient(to right, darkslateblue, darkblue) ;
                       #marquee {margin-top: 335px; font-size: 25px}}</style> 
        <marquee id="marquee" behavior="alternate" scrollamount="15"  style="font-family: Arial,sans-serif; color: white;">
        <b>As rotas ainda não foram configuradas. Acesse a URL http://localhost:8000/index.php</b></marquee>';
        break;
}