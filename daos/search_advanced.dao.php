<?php
require_once "daos/db.php";

class SearchAdvancedDAO extends Database {
    public function __construct() {
        parent::__construct();
    }

    public function getCnaes() {
        $sql = "SELECT id_cnae AS codigo, description_cnae AS descricao FROM cnaes;";
        $stmt = $this->connection->query($sql);
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function getMunicipios() {
        $sql = "SELECT id_municipality AS codigo, description_municipality AS descricao FROM municipalities;";
        $stmt = $this->connection->query($sql);
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function countFilteredResults(
        ?int $cnae_code = null, 
        ?int $municipality = null, 
        ?string $state = null
    ) {
        $sql = "SELECT COUNT(*) as total 
                FROM establishments
                INNER JOIN municipalities 
                    ON establishments.municipality_id = municipalities.id_municipality
                INNER JOIN cnaes 
                    ON establishments.cnae_id = cnaes.id_cnae";

        $where = "";
        $params = [];

        if (!empty($cnae_code)) {
            $where .= (empty($where) ? " WHERE " : " AND ") . "establishments.cnae_id = :cnae_code";
            $params[':cnae_code'] = $cnae_code;
        }

        if (!empty($municipality)) {
            $where .= (empty($where) ? " WHERE " : " AND ") . "establishments.municipality_id = :municipality";
            $params[':municipality'] = $municipality;
        }

        if (!empty($state)) {
            $where .= (empty($where) ? " WHERE " : " AND ") . "establishments.state_establishment = :state";
            $params[':state'] = $state;
        }

        $sql .= $where;
        $stmt = $this->connection->prepare($sql);

        foreach ($params as $key => $value) {
            $type = is_int($value) ? PDO::PARAM_INT : PDO::PARAM_STR;
            $stmt->bindValue($key, $value, $type);
        }

        $stmt->execute();
        return $stmt->fetchColumn();
    }

    public function searchDataBase(
        ?int $cnae_code = null, 
        ?int $municipality = null, 
        ?string $state = null, 
        int $page = 1,      
        int $perPage = 10  
    ) {
        $offset = ($page - 1) * $perPage; 

        $sql = "SELECT
                    CONCAT(base_cnpj_company, order_cnpj_establishment, dv_cnpj_establishment) AS CNPJ, 
                    cnaes.description_cnae AS CNAE, 
                    establishments.cnae_id AS CNAE_CODE,
                    municipalities.description_municipality AS MUNICIPIO,
                    establishments.registration_status_establishment AS SITUACAO,
                    establishments.headquarters_branch_establishment AS MATRIZ_FILIAL,
                    establishments.cnae_secundario_temporario AS CNAE_SECUNDARIO 
                FROM 
                    establishments
                INNER JOIN municipalities 
                    ON establishments.municipality_id = municipalities.id_municipality
                INNER JOIN cnaes 
                    ON establishments.cnae_id = cnaes.id_cnae";

        $where = "";
        $params = [];

        if (!empty($cnae_code)) {
            $where .= (empty($where) ? " WHERE " : " AND ") . "establishments.cnae_id = :cnae_code";
            $params[':cnae_code'] = $cnae_code;
        }

        if (!empty($municipality)) {
            $where .= (empty($where) ? " WHERE " : " AND ") . "establishments.municipality_id = :municipality";
            $params[':municipality'] = $municipality;
        }

        if (!empty($state)) {
            $where .= (empty($where) ? " WHERE " : " AND ") . "establishments.state_establishment = :state";
            $params[':state'] = $state;
        }

        $sql .= $where;
        $sql .= " LIMIT :limit OFFSET :offset";
        
    
        $params[':limit'] = $perPage;
        $params[':offset'] = $offset;

        $stmt = $this->connection->prepare($sql);

 
        foreach ($params as $key => $value) {
            $type = match($key) {
                ':cnae_code', ':municipality', ':limit', ':offset' => PDO::PARAM_INT,
                default => PDO::PARAM_STR
            };
            $stmt->bindValue($key, $value, $type);
        }

        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
}