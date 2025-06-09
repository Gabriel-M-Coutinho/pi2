<?php
class RegistrationStatusReason
{
    private int $id_registration_status_reason;

    public function __construct(
        private string $description = ""
    ){}


    // ============ GETs ============
    public function getIdRegistrationStatusReason()
    {
        return $this->id_registration_status_reason;
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