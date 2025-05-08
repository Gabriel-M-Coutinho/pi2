<?php
final class Common extends User
{
    public function __construct(
        private string $type = ""
    )
    {
        parent:: __construct($name, $email, $password);
    }

    public function getType()
    {
        return $this->type;
    }


    public function setType($type)
    {
        $this->type = $type;
    }
}
?>