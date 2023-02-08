<?php

class ModelProfile extends Model
{
	public $image;
	public $name;
	public $email;
	public $password;
	
	public function getData()
	{	
	    $user=file_get_contents('username.txt');
            $data=parent::getPosts('users',$user);
            foreach($data as $row) {
		        $id=$row['id'];
		        //echo $id;
		        $name=$row['name'];
		        //echo $name;
		        $email=$row['email'];
		        $username=$row['username'];
		        $password=$row['password'];
		        $image=$row['image'];
	        }	
			//если данные были переданы то добавляем в бд
	        if (!empty($_POST['name2'])) {
		        $this->nameChange();
	        }
	        if (!empty($_POST['password2'])) {
		        $this->passwordChange();
	        }
	        if (!empty($_POST['email2'])) {
		        $this->emailChange();
	        }
	        //echo $_POST['name2'];
	       // echo $name;
        }
	
	//методы для добавления в бд
	public function nameChange()
	{
		$user=file_get_contents('username.txt');
		$params = array('name'=> $_POST['name2']);
		return parent::query ("UPDATE `users`
  		SET 
		`name` = :name
  		 WHERE `username` = '$user'",
		 $params);
	}
	
	public function emailChange()
	{
		$user=file_get_contents('username.txt');
		$params = array('email'=> $_POST['email2']);
		return parent::query ("UPDATE `users`
  		SET 
		`email` = :email
  		WHERE `username` = '$user'",
		$params);	
	}
	
	public function passwordChange()
	{
		$user=file_get_contents('username.txt');
		$params = array('password'=> md5($_POST['password2']));
		return parent::query ("UPDATE `users`
  		SET 
		`password` = :password
  		WHERE `username` = '$user'",
	        $params);	
	}
		/*$args = [
		'name' => $this->name,
		'surname' =>  $this->name_2,
		'city' => $this->city,
		'email' => $this->email,
		'password' =>$this->password
		];
 		$this->db->sql($query, $args);	
		}*/	

}
