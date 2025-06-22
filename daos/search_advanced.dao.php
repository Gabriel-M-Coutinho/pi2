<?php
    require_once "daos/db.php";
    class SearchAdvancedDAO extends Database {
        public function __construct()
        {
            parent::__construct();
        }

        public function getCnaes() {
            $sqlCnaes = "SELECT id_cnae AS 'codigo', description_cnae AS 'descricao' FROM cnaes;";

            $stmt = $this->connection->query($sqlCnaes);
            $cnaes = $stmt->fetchAll(PDO::FETCH_ASSOC);
            return $cnaes;
        }

        public function searchDataBase(){
            $sql = "SELECT
                        CONCAT(base_cnpj_company, order_cnpj_establishment, dv_cnpj_establishment) AS CNPJ, 
                        cnaes.description_cnae as CNAE, 
                        establishments.cnae_id as CNAE_CODE,
                        municipalities.description_municipality as MUNICIPIO,
                        establishments.registration_status_establishment as SITUACAO,
                        establishments.headquarters_branch_establishment as MATRIZ_FILIAL,
                        establishments.cnae_secundario_temporario as CNAE_SECUNDARIO 
                    FROM 
                    establishments";      
                    
                    "INNER JOIN municipalities 
                    ON establishments.municipality_id = municipalities.id_municipality";
                    "INNER JOIN cnaes 
                    ON establishments.cnae_id = cnaes.id_cnae";
                    "WHERE establishments.cnae_id = 5611204";
                    "AND establishments.municipality_id = 12321";
                    "AND establishments.state_establishment LIKE 'SP';
                    LIMIT 10; ";
        }
        $sql = "SELECT * FROM users WHERE email_user = ?";
        $stmt = $this->connection->prepare($sql);

        $stmt->bindValue(1, $email);
        $stmt->execute();

        $user = $stmt->fetch(PDO::FETCH_ASSOC);

        if ($user && password_verify($password, $user['password_user'])) {
            return $user; 
        }
    }
?>