UPDATE establishments
SET cnae_id = 8888888
WHERE cnae_id NOT IN
(SELECT id_cnae FROM cnaes);

INSERT INTO municipalities(id_municipality, description_municipality)
VALUES (0, "Inválido");

UPDATE establishments
SET municipality_id = 0
WHERE municipality_id NOT IN
(SELECT id_municipality FROM municipalities);

UPDATE establishments
SET registration_status_establishment = "BAIXADA"
WHERE registration_status_establishment IS NULL;

ALTER TABLE establishments 
ADD CONSTRAINT fk_establishments_cnae 
FOREIGN KEY (cnae_id) REFERENCES cnaes(id_cnae),
ADD CONSTRAINT fk_establishments_municipality 
FOREIGN KEY (municipality_id) REFERENCES municipalities(id_municipality);