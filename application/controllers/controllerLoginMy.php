<?php

class ControllerLogin extends Controller
{
	function actionIndex()
	{
		$this->view->generate('loginView.php', 'templateView.php');
	}
}
