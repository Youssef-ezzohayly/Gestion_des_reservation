<?php

class Reservation
{
    //les attrubit
    private $id_reservation;
    private $Pension;
    private $type_pension;
    private $nb_lits_bebe;
    private $id_customer;
    private $idRoom;
    // construct 
    function __construct($Pension, $type_pension, $nb_lits_bebe, $id_customer, $idRoom)
    {
        $this->Pension = $Pension;
        $this->type_pension = $type_pension;
        $this->nb_lits_bebe = $nb_lits_bebe;
        $this->id_customer = $id_customer;
        $this->idRoom = $idRoom;
    }
    //les accesseurs 

    public function getIdReservation()
    {
        return $this->id_reservation;
    }
    public function getPension()
    {
        return $this->Pension;
    }
    public function setPension($value)
    {
        $this->Pension = $value;
    }
    public function getTypePension()
    {
        return $this->type_pension;
    }
    public function setTypePension($value)
    {
        $this->type_pension = $value;
    }

    public function getNbLitsBebe()
    {
        return $this->nb_lits_bebe;
    }

    public function setNbLitsBebe($value)
    {
        $this->nb_lits_bebe = $value;
    }

    public function getIdRoom()
    {
        return $this->idRoom;
    }
    public function setIdRoom($value)
    {
        $this->idRoom = $value;
    }
}
