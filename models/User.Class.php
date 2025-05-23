<?php
abstract class User {
    
    public function __construct(
        private int $id_user,
        private string $email = "",
        private string $password = "",
        private array $order = array()
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

    public function setPurchase($order)
    {
        $this->order[] = $order; 
    }
}

?>