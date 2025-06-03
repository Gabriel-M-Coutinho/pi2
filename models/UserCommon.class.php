<?php
final class UserCommon extends User
{
    private int $id_user;
    
    public function __construct(
        string $email,
        string $password,
        private string $name = "",
        private string $cpf = "",
      

    )
    {
        parent:: __construct( $email, $password);
    }

    // ============ GETs ============

    public function getId(){
        return $this->id_user;
    }

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