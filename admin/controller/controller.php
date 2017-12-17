<?php
include_once("model/Model.php");

class Controller {
	public $model;

	public function __construct()  
	{  
		$this->model = new Model();

	} 

	public function login()
	{
		$result = $this->model->getlogin();     

		if($result == 'login'){
			header('location:staff.php');
		}
		else
		{
			include 'view/login.php';
		}
	}
}

?>