<?php

class Register
{
    public function __construct()
    {
        
    }
    function index()
    {
        $this->view->render('../register/index');
    }
    function signup()
    {
        $name = $_POST['name'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        $count = $this->model->check_user($name, $email);
        if ($count > 0) {
            echo 'This User Already Exists';
        } else {
            $data = array(
                'id' => null,
                'name' => $_POST['name'],
                'email' => $_POST['email'],
                'password' => $_POST['password']
            );
            $this->model->insert_user($data);
        }
        header('location:index');
    }
}
