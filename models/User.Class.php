<?php
class User {
    private int $id_user;
    private array $order = array();

    public function __construct(
        private string $email = "",
        private string $password = "",
        private string $name = "",
        private string $document = "",
        private string $user_type = ""
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

    public function getName()
    {
        return $this->name;
    }

    public function getDocument()
    {
        return $this->document;
    }

    public function getUserType()
    {
        return $this->user_type;
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

    public function setName($name)
    {
        $this->name = $name;
    }

    public function setDocument($document)
    {
        $this->document = $document;
    }

    public function setUserType($user_type)
    {
        $this->user_type = $user_type;
    }

    public function setOrder($order)
    {
        $this->order[] = $order; 
    }
}
?>