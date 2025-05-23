<?php
abstract class Database
{
    protected $connection;

    public function __construct()
    {
        $host = "localhost"; 
        $user = "gabriel";
        $password = "123123w";
        $databaseName = "clinictrack";

        try {

            $pdo = new PDO("mysql:host=$host", $user, $password);
            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);


            $pdo->exec("CREATE DATABASE IF NOT EXISTS $databaseName");
            $pdo = null;


            $this->connection = new PDO("mysql:host=$host;dbname=$databaseName", $user, $password);
            $this->connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

            $this->createTables();
        } catch (PDOException $e) {
            die("Connection or database creation error: " . $e->getMessage());
        }
    }

    private function createTables()
    {
        $sql = "
            CREATE TABLE IF NOT EXISTS users (
                id INT AUTO_INCREMENT PRIMARY KEY,
                name VARCHAR(100),
                age INT,
                email VARCHAR(50) UNIQUE,
                password VARCHAR(255)
            );
        ";

        $this->connection->exec($sql);
    }
}
?>
