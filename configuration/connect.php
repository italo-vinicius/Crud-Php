<?php

namespace Connect;
require_once __DIR__ . '/../vendor/autoload.php';


use PDO;
use PDOException;
use Dotenv\Dotenv;

$dotenv = Dotenv::createImmutable(__DIR__  . '/..');
$dotenv->load();



class Connect
{
    protected $connection;

    public function __construct()
    {
        $this->connectDatabase();
    }

    private function connectDatabase(): void
    {
        try {
            $this->connection = new PDO('mysql:host=' . getenv('HOST') . ';dbname=' . getenv('DATABASE'), getenv('USER'), getenv('PASSWORD'));
        } catch (PDOException $e) {
            echo 'ERROR! ' . $e->getMessage();
            die();
        }
    }
}
