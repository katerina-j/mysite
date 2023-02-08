<?php
$path = 'img/';
$tmp_path = 'tmp/';
// Массив допустимых значений типа файла
$types = array('image/gif', 'image/png', 'image/jpeg');
// Максимальный размер файла
$size = 2048000;
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
	$getMime = explode('.', $_FILES['file']['name']);
	//расширение
	$mime = strtolower(end($getMime));
	if (!in_array($_FILES['file']['type'], $types)) {
		echo 'Недопустимый тип файла!';
	}
	// Проверяем размер файла
	else if ($_FILES['file']['size'] > $size) {
		echo 'Слишком большой размер файла';
	} else {
		//die('Слишком большой размер файла. <a href="?">Попробовать другой файл?</a>');
	    $name=file_get_contents('username.txt');
	    if (!@copy($_FILES['file']['tmp_name'], $path . $name.'.'.$mime)) {
		    echo 'Что-то пошло не так';
	     } else {
		echo 'Загрузка удачна';
	    }
	}
} 
 
?>
<div class="form">  
    <form enctype="multipart/form-data" action="" method="post"> 
        <input name="file" type="file" />
        <input type="submit" value="Загрузить" />
    </form>
</div>
