<?php

class ControllerRegistration extends Controller
{
	protected $db;
    public function __construct() {
        $this->model = new ModelRegistration();
		$this->view = new View();
    }
	
	function actionIndex()
	{	
		$data = $this->model->getData();
	    if (file_get_contents('username.txt')=='') {
            $this->view->generate('formRegistrationView.php', 'templateView.php', $data);
		} else {
	        $this->view->generate('RegistrationView.php', 'templateView.php', $data);
        }
	}
}

