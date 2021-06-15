<?php

class Customer
{
    //les attrubit
    private $id_customer;
    private $full_name;
    private $login;
    private $password;

    // construct 
    function __construct($full_name, $login, $password)
    {
        $this->full_name = $full_name;
        $this->login = $login;
        $this->password = $password;
    }
    
    //les accesseurs 
    public function getIdCustomer()
    {
        return $this->id_customer;
    }
    public function getFullName()
    {
        return $this->full_name;
    }
    public function setFullName($value)
    {
        $this->full_name = $value;
    }
    public function getLogin()
    {
        return $this->login;
    }
    public function setLogin($value)
    {
        $this->login = $value;
    }
    public function getPassword()
    {
        return $this->password;
    }

    public function setPassword($value)
    {
        $this->password = $value;
    }
}
