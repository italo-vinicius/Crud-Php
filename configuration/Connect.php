<?php

namespace Connect;
require_once __DIR__ . '/../vendor/autoload.php';


use PDO;
use PDOException;
use Dotenv\Dotenv;

$dotenv = Dotenv::createImmutable(__DIR__  . '/..');
$dotenv->load();

define("HOST", $_ENV['HOST']);
define("DATABASE", $_ENV['DATABASE']);
define("USER", $_ENV['USER']);
define("PASSWORD", $_ENV['PASSWORD']);


class Connect
{
    protected PDO $connection;

    public function __construct()
    {
        $this->connectDatabase();
    }

    private function connectDatabase(): void
    {
        try {
        $this->connection = new PDO('mysql:host=' . HOST . ';dbname=' . DATABASE, USER, PASSWORD);
        } catch (PDOException $e) {
            echo 'ERROR! ' . $e->getMessage();
            die();
        }
    }
}
