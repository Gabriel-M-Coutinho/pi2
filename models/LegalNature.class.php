<?php
class LegalNature
{
    private int $id_legal_nature;

    public function __construct(
        private string $description = ""
    ){}


    // ============ GETs ============
    public function getIdLegalNature()
    {
        return $this->id_legal_nature;
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