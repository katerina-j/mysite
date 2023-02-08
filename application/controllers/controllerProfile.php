<?php

class ControllerProfile extends Controller
{
	function __construct()
	{
		$this->model = new ModelProfile();
		$this->view = new View();
	}
	
	function actionIndex()
	{
		$data = $this->model->getData();
		$this->view->generate('ProfileView.php', 'templateView.php', $data);
	}
}
