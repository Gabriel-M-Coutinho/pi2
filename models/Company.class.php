<?php
class Company
{
    private int $id_company;
    private int $legal_nature_id;

    public function __construct(
        private string $base_cnpj = "",
        private string $legal_name = "",
        private int $responsible_qualification = 0,
        private float $social_capital = 0.00,
        private int $company_size = 0,
        private string $federative_entity = ""
    ){}


    // ============ GETs ============
    public function getIdCompany()
    {
        return $this->id_company;
    }

    public function getBaseCnpj()
    {
        return $this->base_cnpj;
    }

    public function getLegalName()
    {
        return $this->legal_name;
    }

    public function getResponsibleQualification()
    {
        return $this->responsible_qualification;
    }

    public function getSocialCapital()
    {
        return $this->social_capital;
    }

    public function getCompanySize()
    {
        return $this->company_size;
    }

    public function getFederativeEntity()
    {
        return $this->federative_entity;
    }

    public function getLegalNatureId()
    {
        return $this->legal_nature_id;
    }


    // ============ SETs ============
    public function setBaseCnpj($base_cnpj)
    {
        $this->base_cnpj = $base_cnpj;
    }

    public function setLegalName($legal_name)
    {
        $this->legal_name $legal_name;
    }

    public function setResponsibleQualification($responsible_qualification)
    {
        $this->responsible_qualification = $responsible_qualification;
    }

    public function setSocialCapital($social_capital)
    {
        $this->social_capital = $social_capital;
    }

    public function setCompanySize($company_size)
    {
        $this->company_size = $company_size;
    }

    public function setFederativeEntity($federative_entity)
    {
        $this->federative_entity = $federative_entity;
    }

    public function setLegalNatureId($legal_nature_id)
    {
        $this->legal_nature_id = $legal_nature_id;
    }
}
?>