<?php
abstract class User {
    private int $id_user;
    private array $order = array();

    public function __construct(
        private string $email = "",
        private string $password = "",
       
    ) {}


    // ============ GETs ============
    public function getIdUser()
    {
        return $this->id_user;
    }

    public function getEmail()
    {
        return $this->email;
    }

    public function getPassword()
    {
        return $this->password;
    }

    public function getOrder()
    {
        return $this->order;
    }


    // ============ SETs ============
    public function setEmail($email)
    {
        $this->email = $email;
    }

    public function setPassword($password)
    {
        $this->password = $password;
    }

    public function setOrder($order)
    {
        $this->order[] = $order; 
    }
}

?>