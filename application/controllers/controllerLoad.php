<?php

class ControllerLoad extends Controller
{
	function __construct()
	{
		$this->model = new ModelLoad();
		$this->view = new View();
	}
	
	function actionIndex()
	{
		$data = $this->model->getData();
        $this->view->generate('loadView.php', 'templateView.php', $data);
    }	
} 

