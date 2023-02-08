<?php

class ControllerMap extends Controller
{
	function actionIndex()
	{
		$this->view->generate('mapView.php', 'templateView.php');
	}
}
