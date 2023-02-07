<?php
class Route
/*
Класс-маршрутизатор для определения запрашиваемой страницы.
> цепляет классы контроллеров и моделей;
> создает экземпляры контролеров страниц и вызывает действия этих контроллеров.
*/
{

	static function start()
	{
		// контроллер и действие по умолчанию
		$controllerName = 'Main';
		$actionName = 'index';
        $routes = explode('/', $_SERVER['REQUEST_URI']);
		// получаем имя контроллера
		if (!empty($routes[1])) {	
			$controllerName = $routes[1];
		}
		// получаем имя экшена
		if (!empty($routes[2])){
			$actionName = $routes[2];
		}
		// добавляем префиксы
		$modelName = 'Model'.$controllerName;
		$controllerName = 'Controller'.$controllerName;
		$actionName = 'action'.$actionName;
		// подцепляем файл с классом модели (файла модели может и не быть)
		$modelFile = strtolower($modelName).'.php';
		$modelPath = "application/models/".$modelFile;
		if(file_exists($modelPath)) {
			include "application/models/".$modelFile;
		}
		// подцепляем файл с классом контроллера
		$controllerFile = strtolower($controllerName).'.php';
		$controllerPath = "application/controllers/".$controllerFile;
		if(file_exists($controllerPath)){
			include "application/controllers/".$controllerFile;
		} else {
			Route::ErrorPage404();
		}
		// создаем контроллер
		$controller = new $controllerName;
		$action = $actionName;
		if(method_exists($controller, $action)) {
			// вызываем действие контроллера
			$controller->$action();
		} else {
			Route::ErrorPage404();
		}
	}

	function ErrorPage404()
	{
        
        }
}
