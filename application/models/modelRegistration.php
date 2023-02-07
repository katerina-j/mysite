<?php

class ModelRegistration extends Model
{
	public $db;
	public function getData()
	{	
        $data=parent::getAll('users');
        foreach($data as $row) {
			//проверка естьпользователь с таким именем и логином в бд
		    if (($row['username']==$_POST['username'])&&($row['name']==$_POST['name'])){
		        echo 'Такой пользователь уже существует, придумайте другое имя/логин';
		    } else if (($row['username']==$_POST['username'])||($row['name']==$_POST['name'])) {
		        echo 'Такой пользователь уже существует, придумайте другое имя/логин';
		    } else {
			//добавить в базу данные
			    return $this->insertUser();
		    }
	    }
	}
	
//добавление пользователя в бд	
    public function insertUser()
    {
        $params = array(
        'name' => $_POST['name'],
        'username' => $_POST['username'],
        'email' =>$_POST['email'],
        'password' => md5($_POST['password']),
        'image'=>'');
	     parent::query('INSERT INTO `users` (
        `name`,
        `username`,
        `email`,
        `password`,
        `image`
        )
        VALUES (
        :name,
        :username,
        :email,
        :password,
        :image
        )', $params);
	}
}
		
	
?>