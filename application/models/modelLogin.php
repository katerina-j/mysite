<?php
    class ModelLogin extends Model
    {
	    public $username;
	    public $name;
	    public $email;
	    public function getData()
	    {	
            $data=parent::getAll('users');
            foreach($data as $row) {
		        if (($row['username']==$_POST['username'])&&($row['password']==md5($_POST['password']))) {
			        $this->setName($row['username']);
		         }
		/*else{
			//$this->setDocuments('');
			//echo 'совпадений не найдено!';
		}*/
		     }
		//если кнопка выход не нажата и логин еще не записан
		if ((file_get_contents('username.txt')=='')&&(!isset($_POST['myActionName']))) { 
            $this->setDocuments($this->getName());
	    }
		//если перешли обратно на стр. логин и пост обнулился, но выход не был нажат
		else if (!isset($_POST['username'])&&(!isset($_POST['myActionName']))) {
			$_POST['username']=file_get_contents('username.txt');	
		} else if ((file_get_contents('username.txt'))=='') {
		    echo 'Записей нет!';
			 
		} else {   //если нажата кнопка выход
			if (isset($_POST['myActionName'])) {
		        $this->setDocuments('');
		        echo 'Подходящих записей нет!';
		        //unset($_POST['myActionName']);	
	        }
			 
		}  
		if (isset($_POST['myActionName'])) {
		    $this->setDocuments('');
		}
	
	
	
	    /*if (isset($_POST['myActionName'])) {
		    file_put_contents('username.txt','');
		    //unset($_POST['myActionName']);
	    }*/
	}

	public function setName($name)
	{
		$this->name=$name;
	}
	
	public function getName()
	{
		return $this->name;
	}
	
	public function setDocuments($data)
	{
		$str=file_put_contents('username.txt', $data);
	}
	
	public function exitAccount()
	{
		 if (isset($_POST['myActionName']))
		{
		$str=file_put_contents('username.txt','');
		}
	}
	
	public function setPost($name, $username, $email,$password)
	{
		$name= $_POST['name'];
		$username=$_POST['username'];
		$email= $_POST['email'];
		$password= $_POST['password'];
		$this->users[]=$name;
		$this->users[]=$username;
		$this->users[]=$email;
		$this->users[]=$password;
		
	}

	public function getPost()
	{	
		//return $this->title;
		//return $this->phoneNumber;
		//return $this->text;
		return $this->users;
	}
}
