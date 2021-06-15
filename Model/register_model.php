<?php
include '../classes/connexion.php';
$conn= new Connection();

class Register_Model
{
	public function __construct()
	{
	}

	public function check_user($name, $email)
	{
		$result = $this->conn->select("SELECT * FROM `user` WHERE nome = `{$name}` OR email = `{$email}` ");
		$res = count($result);
		return $res;
	}

	public function insert_user($data)
	{
		$this->db->insert('register', $data);
	}
}
