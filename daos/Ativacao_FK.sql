UPDATE companies
SET partner_qualification_id = 0
WHERE partner_qualification_id NOT IN 
(SELECT id_partner_qualification FROM partner_qualifications);

UPDATE companies
SET legal_nature_id = 0
WHERE legal_nature_id NOT IN
(SELECT id_legal_nature FROM legal_natures);

ALTER TABLE companies 
ADD CONSTRAINT fk_companies_partner_qualification 
FOREIGN KEY (partner_qualification_id) REFERENCES partner_qualifications(id_partner_qualification),
ADD CONSTRAINT fk_companies_legal_nature 
FOREIGN KEY (legal_nature_id) REFERENCES legal_natures(id_legal_nature);

---

INSERT INTO companies (base_cnpj_company, legal_nature_id, partner_qualification_id, legal_name_company, social_capital_company, size_company, federative_entity_company)
VALUES ('INDEFINIDO', 0, 0, NULL, NULL, 'NÃO INFORMADO', NULL);

UPDATE partners
SET base_cnpj_company = 'INDEFINIDO'
WHERE base_cnpj_company NOT IN
(SELECT base_cnpj_company FROM companies);

UPDATE partners
SET country_id = 999
WHERE country_id NOT IN
(SELECT id_country FROM countries);

UPDATE partners
SET partner_qualification_id = 0
WHERE partner_qualification_id NOT IN 
(SELECT id_partner_qualification FROM partner_qualifications);

UPDATE partners
SET representative_qualification_id = 0
WHERE representative_qualification_id NOT IN 
(SELECT id_partner_qualification FROM partner_qualifications);

ALTER TABLE partners 
ADD CONSTRAINT fk_partners_company 
FOREIGN KEY (base_cnpj_company) REFERENCES companies(base_cnpj_company),
ADD CONSTRAINT fk_partners_country 
FOREIGN KEY (country_id) REFERENCES countries(id_country),
ADD CONSTRAINT fk_partners_partner_qualification 
FOREIGN KEY (partner_qualification_id) REFERENCES partner_qualifications(id_partner_qualification),
ADD CONSTRAINT fk_partners_representative_qualification 
FOREIGN KEY (representative_qualification_id) REFERENCES partner_qualifications(id_partner_qualification);

---

UPDATE establishments
SET cnae_id = 8888888
WHERE cnae_id NOT IN
(SELECT id_cnae FROM cnaes);

UPDATE establishments
SET registration_sr_id = 0
WHERE registration_sr_id NOT IN
(SELECT id_registration_sr FROM registration_status_reasons);

INSERT INTO municipalities(id_municipality, description_municipality)
VALUES (0, "Inválido");

UPDATE establishments
SET municipality_id = 0
WHERE municipality_id NOT IN
(SELECT id_municipality FROM municipalities);

UPDATE establishments
SET country_id = 999
WHERE country_id NOT IN
(SELECT id_country FROM countries);

UPDATE establishments
SET base_cnpj_company = 'INDEFINIDO'
WHERE base_cnpj_company NOT IN
(SELECT base_cnpj_company FROM companies);

ALTER TABLE establishments 
ADD CONSTRAINT fk_establishments_cnae 
FOREIGN KEY (cnae_id) REFERENCES cnaes(id_cnae),
ADD CONSTRAINT fk_establishments_registration_status 
FOREIGN KEY (registration_sr_id) REFERENCES registration_status_reasons(id_registration_sr),
ADD CONSTRAINT fk_establishments_municipality 
FOREIGN KEY (municipality_id) REFERENCES municipalities(id_municipality),
ADD CONSTRAINT fk_establishments_country 
FOREIGN KEY (country_id) REFERENCES countries(id_country),
ADD CONSTRAINT fk_establishments_company 
FOREIGN KEY (base_cnpj_company) REFERENCES companies(base_cnpj_company);