<?php

abstract class Database
{
    protected $connection;

    public function __construct()
    {
        $host = "db"; 
        $user = "gabriel";
        $password = "123123w"; 
        $databaseName = "leadsearch";

        try {
            // Conectar diretamente ao banco existente
            $this->connection = new PDO(
                "mysql:host=$host;dbname=$databaseName;charset=utf8mb4", 
                $user, 
                $password
            );
            $this->connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

            $this->createTables();
        } catch (PDOException $e) {
            die("Connection or database creation error: " . $e->getMessage());
        }
    }

    private function createTables()
    {
        $sql = file_get_contents("./daos/leadsearchBD.sql");
        echo $sql;
        $this->connection->exec($sql);
    }
}
?>
