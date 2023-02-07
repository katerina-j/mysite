<?php

class ModelLoad extends Model
{
	public $image;
    public function getData()
    {
	    $path = 'img/';
        $tmp_path = 'tmp/';
        // Массив допустимых значений типа файла
        $types = array('image/gif', 'image/png', 'image/jpeg');
        // Максимальный размер файла
        $size = 2048000;
        if ($_SERVER['REQUEST_METHOD'] == 'POST'){
	        if (!in_array($_FILES['file']['type'], $types)){
		        echo 'Недопустимый тип файла!';
			}
	            // Проверяем размер файла
	         else if ($_FILES['file']['size'] > $size) {
		        echo 'Слишком большой размер файла';
		        //die('Слишком большой размер файла. <a href="?">Попробовать другой файл?</a>');
	        } else {
		        //die('Слишком большой размер файла. <a href="?">Попробовать другой файл?</a>');
	            $name=file_get_contents('username.txt');
	                if (!@copy($_FILES['file']['tmp_name'], $path . $name.'_'.$_FILES['file']['name'])){
		                $img=$path . $name.'_'.$_FILES['file']['name'];
		                echo 'Что-то пошло не так';
	               } else {
		                $img=$path . $name.'_'.$_FILES['file']['name'];
		                echo 'Загрузка удачна';
	                }
	            }
        }
	
    }

}
