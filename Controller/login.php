<?php

class Login  {

	function __construct() {
	
	}
	
	
	function index() {
	
		$this->view->render('login/index');
	}
	
	function run()
	{
		$this->model->run();
		
	}
	
	
	/* logging out the user */
	function logout()
	{
		
		header('location: index');
		exit;
	}
}