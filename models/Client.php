<?php


use Connect\Connect;

require_once './configuration/Connect.php';

class Client extends Connect
{
    private string $table;
    public function __construct()
    {
        parent::__construct();
        $this->table = 'clients';
    }

    public function getAllDate(): false|array
    {
        $sqlSelect = $this->connection->query("SELECT * FROM " . $this->table);
        return $sqlSelect->fetchAll();
    }
}