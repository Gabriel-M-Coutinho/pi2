<?php
final class UserCompany extends User
{
    private int $id_user;

    public function __construct(
        private string $company_name = "",
        private string $cnpj = "",
        string $email,
        string $password,
    )
    {
        parent:: __construct( $email, $password);
    }


    // ============ GETs ============
        public function getIdUser()
    {
        return $this->id_user;
    }

    public function getCompanyName()
    {
        return $this->company_name;
    }

    public function getCNPJ()
    {
        return $this->cnpj;
    }


    // ============ SETs ============
    public function setType($company_name)
    {
        $this->company_name = $company_name;
    }

    public function setCNPJ($cnpj)
    {
        $this->cnpj = $cnpj;
    }
}
?>