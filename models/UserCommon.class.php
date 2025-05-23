<?php
final class UserCommon extends User
{
    public function __construct(
        private string $name = "",
        private string $cpf = "",
        int $id_user,
        string $email,
        string $password,
        array $order
    )
    {
        parent:: __construct($id_user, $email, $password, $order());
    }

    // ============ GETs ============
    public function getName()
    {
        return $this->name;
    }

    public function getCPF()
    {
        return $this->cpf;
    }


    // ============ SETs ============
    public function setName($name)
    {
        $this->name = $name;
    }

    public function setCPF($cpf)
    {
        $this->cpf = $cpf;
    }
}
?>