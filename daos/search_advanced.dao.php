<?php
    require_once "daos/db.php";


class SearchAdvancedDAO extends Database {
    public function __construct() {
        parent::__construct();
    }

    public function getCnaes() {
        $sqlCnaes = "SELECT id_cnae AS codigo, description_cnae AS descricao FROM cnaes;";
        $stmt = $this->connection->query($sqlCnaes);
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function searchDataBase(
        ?int $cnae_code = null, 
        ?int $municipality = null, 
        ?string $state = null, 
        int $page = 0
    ) {
            
        $limit = 100;
        $offset = $page * $limit;

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

        if (!empty($cnae_code)) {
            $where .= (empty($where) ? " WHERE " : " AND ") . "establishments.cnae_id = :cnae_code";
        }

        if (!empty($municipality)) {
            $where .= (empty($where) ? " WHERE " : " AND ") . "establishments.municipality_id = :municipality";
        }

        if (!empty($state)) {
            $where .= (empty($where) ? " WHERE " : " AND ") . "establishments.state_establishment = :state";
        }

        $sql .= $where;


        $sql .= " LIMIT :limit OFFSET :offset";

        $stmt = $this->connection->prepare($sql);


        if (!empty($cnae_code)) {
            $stmt->bindValue(':cnae_code', $cnae_code, PDO::PARAM_INT);
        }

        if (!empty($municipality)) {
            $stmt->bindValue(':municipality', $municipality, PDO::PARAM_INT);
        }

        if (!empty($state)) {
            $stmt->bindValue(':state', $state, PDO::PARAM_STR);
        }

      
        $stmt->bindValue(':limit', $limit, PDO::PARAM_INT);
        $stmt->bindValue(':offset', $offset, PDO::PARAM_INT);
        
        $stmt = $this->connection->prepare($sql);
        
        $stmt->execute();

        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
}
?>