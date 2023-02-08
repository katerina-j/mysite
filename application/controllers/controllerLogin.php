<?php

class ControllerLogin extends Controller
{
	function __construct()
	{
		$this->model = new ModelLogin();
		$this->view = new View();
	}
	function actionIndex()
	{
		$data = $this->model->getData();
		//при вводе корректных данных пользователя, ник записался в блокнот, проверка была ли произведена запись
        if ((file_get_contents('username.txt'))=='') {
            $this->view->generate('loginViewMy.php', 'templateView.php', $data);
        } else {
		    $this->view->generate('loginView.php', 'templateView.php', $data);
	    }
	}
}
		
