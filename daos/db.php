<?php
abstract class Database
{
    protected $connection;

    public function __construct()
    {
        $host = "localhost"; 
        $user = "root";
        $password = "";
        $databaseName = "leadsearch";

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
    USE LeadSearch;

    CREATE TABLE IF NOT EXISTS partner_qualifications (
	    id_partner_qualification BIGINT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
        description_partner_qualification TEXT NOT NULL
    );

    CREATE TABLE IF NOT EXISTS cnaes (
	    id_cnae BIGINT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
        code_cnae INT NOT NULL,
        description_cnae TEXT NOT NULL
    );

    CREATE TABLE IF NOT EXISTS countries (
	    id_country BIGINT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
        description_country VARCHAR(70) NOT NULL
    );

    CREATE TABLE IF NOT EXISTS registration_status_reasons (
	    id_registration_sr BIGINT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
        description_registration_sr VARCHAR(70) NOT NULL
    );

    CREATE TABLE IF NOT EXISTS legal_natures (
	    id_legal_nature BIGINT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
        description_legal_nature VARCHAR(70) NOT NULL
    );

    CREATE TABLE IF NOT EXISTS partners (
	    id_partner BIGINT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
        country_id BIGINT UNSIGNED,
        partner_qualification_id BIGINT UNSIGNED,
        name_partner VARCHAR(255),
        cpf_cnpj_partner VARCHAR(20),
        entry_date_partner DATE,
        legal_representative_partner VARCHAR(255),
        representative_name_partner VARCHAR(255),
        representative_qualification_partner VARCHAR(255),
        age_group_partner INT,
        FOREIGN KEY (country_id) REFERENCES countries(id_country),
        FOREIGN KEY (partner_qualification_id) REFERENCES partner_qualifications(id_partner_qualification)
    );

    CREATE TABLE IF NOT EXISTS users (
	    id_user BIGINT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
	    email_user VARCHAR(100) UNIQUE,
	    password_user VARCHAR(255) NOT NULL,
        name_user VARCHAR(255) NOT NULL,
        document_user VARCHAR(20) NOT NULL,
        user_type ENUM('PF', 'PJ')
    );

    CREATE TABLE IF NOT EXISTS orders (
	    id_order BIGINT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
        user_id BIGINT UNSIGNED,
	    date_order DATETIME DEFAULT CURRENT_TIMESTAMP,
	    date_payment_order DATETIME DEFAULT CURRENT_TIMESTAMP,
	    method_payment_order ENUM('Pix', 'Credito', 'Debito'),
        FOREIGN KEY (user_id) REFERENCES users(id_user)
    );

    CREATE TABLE IF NOT EXISTS companies (
        id_company BIGINT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
        legal_nature_id BIGINT UNSIGNED,
    
        base_cnpj_companies VARCHAR(20),
        legal_name_companies VARCHAR(255),
        responsible_qualification_companies INT,
        social_capital_companies FLOAT,
        company_size_companies INT,
        federative_entity_companies VARCHAR(100),

        FOREIGN KEY (legal_nature_id) REFERENCES legal_natures(id_legal_nature)
    );

    CREATE TABLE IF NOT EXISTS establishments (
	    id_establishment BIGINT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
        cnae_id BIGINT UNSIGNED,
        registration_sr_id BIGINT UNSIGNED,
        country_id BIGINT UNSIGNED,
        company_id BIGINT UNSIGNED,

        order_cnpj_establishment VARCHAR(10),
        dv_cnpj_establishment VARCHAR(5),
        headquarters_branch_establishment INT,
        trade_name_establishment VARCHAR(255),
        registration_status_establishment INT,
        registration_status_date_establishment DATE,
        foreign_city_name_establishment VARCHAR(100),
        activity_start_date_establishment DATE,
        street_type_establishment VARCHAR(50),
        street_establishment VARCHAR(255),
        number_establishment VARCHAR(20),
        complement_establishment VARCHAR(100),
        neighborhood_establishment VARCHAR(100),
        zip_code_establishment VARCHAR(20),
        state_establishment VARCHAR(2),
        municipality_establishment INT,
        ddd1_establishment VARCHAR(5),
        phone1_establishment VARCHAR(20),
        ddd2_establishment VARCHAR(5),
        phone2_establishment VARCHAR(20),
        ddd_fax_establishment VARCHAR(5),
        fax_establishment VARCHAR(20),
        email_establishment VARCHAR(255),
        special_situation_establishment VARCHAR(100),
        special_situation_date_establishment DATE,
    
        FOREIGN KEY (cnae_id) REFERENCES cnaes(id_cnae),
        FOREIGN KEY (registration_sr_id) REFERENCES registration_status_reasons(id_registration_sr),
        FOREIGN KEY (country_id) REFERENCES countries(id_country),
        FOREIGN KEY (company_id) REFERENCES companies(id_company)
    );

    CREATE TABLE IF NOT EXISTS establishments_secondary_cnaes (
	    id_establishment_secondary_cnae BIGINT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
        establishment_id BIGINT UNSIGNED,
        cnae_id BIGINT UNSIGNED,
        FOREIGN KEY (establishment_id) REFERENCES establishments(id_establishment),
        FOREIGN KEY (cnae_id) REFERENCES cnaes(id_cnae)
    );

    CREATE TABLE IF NOT EXISTS companies_partners (
	    id_company_partner BIGINT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
        company_id BIGINT UNSIGNED,
        partner_id BIGINT UNSIGNED,
        FOREIGN KEY (company_id) REFERENCES companies(id_company),
        FOREIGN KEY (partner_id) REFERENCES partners(id_partner)
    );

    CREATE TABLE IF NOT EXISTS establishments_orders (
	    id_establishment_order BIGINT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
        establishment_id BIGINT UNSIGNED,
        order_id BIGINT UNSIGNED,
        FOREIGN KEY (establishment_id) REFERENCES establishments(id_establishment),
        FOREIGN KEY (order_id) REFERENCES orders(id_order)
    );
";
        $this->connection->exec($sql);
    }
}
?>
