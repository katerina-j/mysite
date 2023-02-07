<?php

class ControllerContacts extends Controller
{
	function actionIndex()
	{
		$this->view->generate('contactsView.php', 'templateView.php');
	}
}

