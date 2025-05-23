<?php
final class UserCompany extends User
{
    public function __construct(
        private string $company_name = "",
        private string $cnpj = "",
        int $id_user,
        string $email,
        string $password,
        array $order
    )
    {
        parent:: __construct($id_user, $email, $password, $order());
    }


    // ============ GETs ============
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