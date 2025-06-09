<?php
class Country
{
    private int $id_country;

    public function __construct(
        private string $description = ""
    ){}


    // ============ GETs ============
    public function getIdCountry()
    {
        return $this->id_country;
    }

    public function getDescription()
    {
        return $this->description;
    }


    // ============ SETs ============
    public function setDescription($description)
    {
        $this->description = $description;
    }
}
?>