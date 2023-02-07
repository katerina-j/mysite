<?php

class ControllerList extends Controller
{
	function __construct()
	{
		$this->model = new ModelList();
		$this->view = new View();
	}
	
	function actionIndex()
	{
		//если нажата кнопка выход грузить одну страницу, если нет то другую
		$data = $this->model->getData();
		if (file_get_contents('username.txt')!='' ) {
		    $this->view->generate('listView.php', 'templateView.php', $data);
		} else {
		    $this->view->generate('listallView.php', 'templateView.php', $data);
		}
	}	
}

