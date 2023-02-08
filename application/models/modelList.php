<?php

class ModelList extends Model
{
	public function getData()
	{	
	    if (isset($_POST['myActionName'])) {
		    file_put_contents('username.txt','');
		    echo 'Подходящих записей нет!';	
	    } else {
	//вывести все посты соответствующие пользователю
	        $params = array(
            'username' => file_get_contents('username.txt'),
            'title' =>$_POST['title'],
            'text' =>$_POST['text'],
            'data'=>date('d.m.Y'));
	        parent::query('INSERT INTO `posts` (
           `username`,
           `title`,
           `text`,
           `data`
            )
            VALUES (
           :username,
           :title,
           :text,
           :data
           )', $params);
	    }
	}
	
	public function getDocuments()
	{
		return $arr = file_get_contents('username.txt');
	}
	
	public function exitAccount()
	{
		if (isset($_POST['myActionName'])) {
	        $str=file_put_contents('username.txt','');
		}
	}
}
