<?php

abstract class Database
{
    protected $connection;

    public function __construct()
    {
        $host = "localhost"; //db
        $user = "root"; //gabriel
        $password = ""; //123123w
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
        $stmt = $this->connection->query("SHOW TABLES LIKE 'users'");
        if ($stmt->rowCount() === 0)
        {
            $sql1 = file_get_contents("./daos/leadsearchBD.sql");
            $sql2 = file_get_contents("./daos/Ativacao_FK.sql");
            $this->connection->exec($sql1);
            $this->connection->exec($sql2);
        }
    }
}
?>
