CREATE DATABASE IF NOT EXISTS leadsearch CHAR SET utf8mb4 COLLATE utf8mb4_unicode_ci;
USE leadsearch;

CREATE TABLE IF NOT EXISTS partner_qualifications (
	id_partner_qualification BIGINT UNSIGNED PRIMARY KEY,
    description_partner_qualification TEXT NOT NULL
);

CREATE TABLE IF NOT EXISTS cnaes (
    id_cnae BIGINT UNSIGNED PRIMARY KEY,
    description_cnae TEXT NOT NULL
);

CREATE TABLE IF NOT EXISTS countries (
	id_country BIGINT UNSIGNED PRIMARY KEY,
    description_country VARCHAR(70) NOT NULL
);

CREATE TABLE IF NOT EXISTS municipalities (
    id_municipality BIGINT UNSIGNED PRIMARY KEY,
    description_municipality VARCHAR(70) NOT NULL
);

CREATE TABLE IF NOT EXISTS registration_status_reasons (
	id_registration_sr BIGINT UNSIGNED PRIMARY KEY,
    description_registration_sr VARCHAR(70) NOT NULL
);

CREATE TABLE IF NOT EXISTS legal_natures (
	id_legal_nature BIGINT UNSIGNED PRIMARY KEY,
    description_legal_nature VARCHAR(70) NOT NULL
);

CREATE TABLE IF NOT EXISTS partners (
	id_partner BIGINT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    base_cnpj_company VARCHAR(20),
    country_id BIGINT UNSIGNED,
    partner_qualification_id BIGINT UNSIGNED,
    representative_qualification_id BIGINT UNSIGNED,

    partner_type_identifier ENUM("PESSOA JURÍDICA", "PESSOA FÍSICA", "ESTRANGEIRO"),
    name_partner VARCHAR(255),
    cpf_cnpj_partner VARCHAR(20),
    entry_date_partner DATE,
    legal_representative_partner VARCHAR(255),
    representative_name_partner VARCHAR(255),
    age_group_partner TINYINT,

    FOREIGN KEY (country_id) REFERENCES countries(id_country),
    FOREIGN KEY (partner_qualification_id) REFERENCES partner_qualifications(id_partner_qualification),
    FOREIGN KEY (representative_qualification_id) REFERENCES partner_qualifications(id_partner_qualification),
    FOREIGN KEY (base_cnpj_company) REFERENCES companies(base_cnpj_company)
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
	method_payment_order ENUM('PIX', 'CREDITO', 'DEBITO'),
    FOREIGN KEY (user_id) REFERENCES users(id_user)
);

CREATE TABLE IF NOT EXISTS companies (
    base_cnpj_company VARCHAR(20) PRIMARY KEY,
    legal_nature_id BIGINT UNSIGNED,
    partner_qualification_id BIGINT UNSIGNED,
    
    legal_name_company VARCHAR(255),
    social_capital_company FLOAT,
    size_company ENUM("NÃO INFORMADO", "MICRO EMPRESA", "EMPRESA DE PEQUENO PORTE", "DEMAIS"),
    federative_entity_company VARCHAR(100),

    FOREIGN KEY (partner_qualification_id) REFERENCES partner_qualifications(id_partner_qualification),
    FOREIGN KEY (legal_nature_id) REFERENCES legal_natures(id_legal_nature)
);

CREATE TABLE IF NOT EXISTS establishments (
	id_establishment BIGINT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    cnae_id BIGINT UNSIGNED,
    municipality_id BIGINT UNSIGNED,
    country_id BIGINT UNSIGNED,
    base_cnpj_company VARCHAR(20),

    order_cnpj_establishment VARCHAR(10),
    dv_cnpj_establishment VARCHAR(5),
    headquarters_branch_establishment ENUM('MATRIZ', 'FILIAL'),
    trade_name_establishment VARCHAR(255),
    registration_status_establishment ENUM('NULA', 'ATIVA', 'SUSPENSA', 'INAPTA', 'BAIXADA'),
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
    FOREIGN KEY (country_id) REFERENCES countries(id_country),
    FOREIGN KEY (municipality_id) REFERENCES municipalities(id_municipality),
    FOREIGN KEY (base_cnpj_company) REFERENCES companies(base_cnpj_company)
);

CREATE TABLE IF NOT EXISTS establishments_secondary_cnaes (
	id_establishment_secondary_cnae BIGINT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    establishment_id BIGINT UNSIGNED,
    cnae_id BIGINT UNSIGNED,
    FOREIGN KEY (establishment_id) REFERENCES establishments(id_establishment),
    FOREIGN KEY (cnae_id) REFERENCES cnaes(id_cnae)
);

CREATE TABLE IF NOT EXISTS establishments_orders (
	id_establishment_order BIGINT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    establishment_id BIGINT UNSIGNED,
    order_id BIGINT UNSIGNED,
    FOREIGN KEY (establishment_id) REFERENCES establishments(id_establishment),
    FOREIGN KEY (order_id) REFERENCES orders(id_order)
);