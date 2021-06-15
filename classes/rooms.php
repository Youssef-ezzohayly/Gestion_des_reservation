<?php

class Customer
{
    //les attrubit
    private $id_Room;
    private $type;
    private $Lit;
    private $Vue;

    // construct 
    function __construct($type, $Lit, $Vue)
    {
        $this->type = $type;        
        $this->Lit = $Lit;
        $this->Vue = $Vue;
    }
    
    //les accesseurs 
    public function getIdRomm()
    {
        return $this->id_Room;
    }
    public function getType()
    {
        return $this->type;
    }
    public function setType($value)
    {
        $this->type = $value;
    }

    public function getLit()
    {
        return $this->Lit;
    }
    public function setLit($value)
    {
        $this->Lit = $value;
    }
    public function getVue()
    {
        return $this->Vue;
    }

    public function setVue($value)
    {
        $this->Vue = $value;
    }
}
