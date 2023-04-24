<?php


use Connect\Connect;

require_once __DIR__ . '/../configuration/Connect.php';

class Client extends Connect
{
    protected string $table;
    protected string $name;
    protected string $phone;
    protected string $email;
    protected string $city;
    protected string $state;
    protected string $address;
    protected string $sexo;
    protected string $data_nascimento;
    protected string $password;


    public function __construct()
    {
        parent::__construct();
        $this->table = 'clients';

    }


    public function setValues(): void
    {
        $this->name = $_POST['name'];
        $this->phone = $_POST['phone'];
        $this->email = $_POST['email'];
        $this->city = $_POST['cidade'];
        $this->state = $_POST['estado'];
        $this->address = $_POST['endereço'];
        $this->sexo = $_POST['genero'];
        $this->data_nascimento = $_POST['data_nascimento'];
        $this->password = $_POST['password'];
    }

    public function getAllUsers(): false|array
    {
        $sqlSelect = $this->connection->query("SELECT * FROM " . $this->table);
        return $sqlSelect->fetchAll();
    }

    public function createUserModel(): void
    {
        $sqlCreate = "INSERT INTO $this->table (name, phone, email, password, city, state, address, sexo, data_nascimento)
                    VALUES  (:name, :phone, :email, :password ,:city, :state, :address, :sexo, :data_nascimento)";
        $query = $this->connection->prepare($sqlCreate);
        $query->bindParam(':name', $this->name);
        $query->bindParam(':phone', $this->phone);
        $query->bindParam(':email', $this->email);
        $query->bindParam(':city', $this->city);
        $query->bindParam(':state', $this->state);
        $query->bindParam(':address', $this->address);
        $query->bindParam(':sexo', $this->sexo);
        $query->bindParam(':data_nascimento', $this->data_nascimento);
        $query->bindParam(':password', $this->password);
        $query->execute();
    }

    public function getUser($email, $password): false|array
    {
        $sqlGetUser = "SELECT * FROM $this->table WHERE email = :email AND password = :password";
        $query = $this->connection->prepare($sqlGetUser);
        $query->bindParam(':email', $email);
        $query->bindParam(':password', $password);
        $query->execute();

        return $query->fetchAll(PDO::FETCH_ASSOC);


    }

    public function getUserById(string $id): false|array
    {
        $sqlGetUser = "SELECT * FROM $this->table WHERE id = :id";
        $query = $this->connection->prepare($sqlGetUser);
        $query->bindParam(':id', $id);
        $query->execute();
        return $query->fetchAll(PDO::FETCH_ASSOC);
    }

    public function storeUser(int $id, string $name, string $phone, string $email, string $city, string $state, string $address, string $sexo, string $data_nascimento, string $password): false|array
    {
        $sqlStoreUser = "UPDATE $this->table SET name = :name, phone = :phone, email = :email, city = :city, state = :state, address = :address, sexo = :sexo, data_nascimento = :data_nascimento, password = :password WHERE id = :id";
        $query = $this->connection->prepare($sqlStoreUser);
        $query->bindParam(":id", $id);
        $query->bindParam(":name", $name);
        $query->bindParam(":phone", $phone);
        $query->bindParam(":email", $email);
        $query->bindParam(":city", $city);
        $query->bindParam(":state", $state);
        $query->bindParam(":address", $address);
        $query->bindParam(":sexo", $sexo);
        $query->bindParam(":data_nascimento", $data_nascimento);
        $query->bindParam(":password", $password);
        $query->execute();
        return $query->fetchAll(PDO::FETCH_ASSOC);

    }

    public function delete(int $id): bool
    {
        $sqlDelete = "DELETE FROM $this->table WHERE id = :id";
        $query = $this->connection->prepare($sqlDelete);
        $query->bindParam(':id', $id);
        $query->execute();
        return true;
    }


}