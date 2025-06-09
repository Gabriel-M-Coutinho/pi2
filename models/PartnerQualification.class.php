<?php
class PartnerQualification
{
    private int $id_partner_qualification;

    public function __construct(
        private string $description_partner = ""
    ){}


    // ============ GETs ============
    public function getIdPartnerQualification()
    {
        return $this->id_partner_qualification;
    }

    public function getDescriptionPartner()
    {
        return $this->description_partner;
    }


    // ============ SETs ============
    public function setDescriptionPartner($description_partner)
    {
        $this->description_partner = $description_partner;
    }
}
?>