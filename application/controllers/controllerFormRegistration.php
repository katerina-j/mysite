<?php

class ControllerFormRegistration extends Controller
{
	function actionIndex()
	{	
		$this->view->generate('RegistrationView.php', 'templateView.php');
	}
}
