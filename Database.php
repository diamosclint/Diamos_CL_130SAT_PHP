<?php

class Database
{
    public $connection;

    public function __construct()
    {
        //tutorial code
        //$dsn = "mysql:host=localhost;port=3306;dbname=appnew;user=root;charset=utf8mb4";
        //$this->connection = new PDO($dsn);

        $dsn = "mysql:host=localhost;port=3306;dbname=appnew;user=root;charset=utf8mb4";

        $username = "root"; // my MySQL username
        $password = "ucbanilad"; // my MySQL password

        $this->connection = new PDO($dsn, $username, $password);
    }

    public function query($query)
    {
        $statement = $this->connection->prepare($query);

        $statement->execute();

        return $statement;
    }
}