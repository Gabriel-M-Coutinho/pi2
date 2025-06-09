<?php
class Cnae
{
    private int $id_cnae;

    public function __construct(
        private int $code = 0,
        private string $description = ""
    ){}


    // ============ GETs ============
    public function getIdCnae()
    {
        return $this->id_cnae;
    }

    public function getCode()
    {
        return $this->code;
    }

    public function getDescription()
    {
        return $this->description;
    }


    // ============ SETs ============
    public function setCode($code)
    {
        $this->code = $code;
    }

    public function setDescription($description)
    {
        $this->description = $description;
    }
}
?>