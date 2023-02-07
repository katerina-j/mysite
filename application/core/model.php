<?php
class Model
{
    //const DB_HOST = 'localhost';
    //const DB_USER = 'root';
    //const DB_PASSWORD = '';
    //const DB_NAME = 'mysite';
    //const CHARSET = 'utf8';
    //const DB_PREFIX = '';
    //protected $options=array();
    public $db;
    //protected static $instance = null;
 
	public function __construct()
	{
	    $dbinfo=array(
		'host' =>'127.0.0.1',
		'dbname' =>'mysite',
		'login' =>'root',
		'password' =>''
	     );
	     $this->db = new PDO('mysql:host=' . $dbinfo['host'] . ';dbname=' . $dbinfo['dbname'], $dbinfo['login'], $dbinfo['password']);
	}
	
	// Операции над БД
	public function query($sql, $params = array())
	{
		// Подготовка запроса
		$stmt = $this->db->prepare($sql);
		// Обход массива с параметрами и подставляем значения
		if (!empty($params)) {
			foreach ($params as $key => $value) {
				$stmt->bindValue(":$key", $value);
			}
		}
		// Выполняя запрос
		$stmt->execute();
		// Возвращаем ответ
		return $stmt->fetchAll(PDO::FETCH_ASSOC);
	}	

	// метод выборки данных
	public function getData()
	{
		
	}	
	public function getAll($table, $sql = '', $params = array())
	{
		return $this->query("SELECT * FROM $table" . $sql, $params);
	}
	
	public function getRow($table, $i, $sql = '', $params = array())
	{
		$result = $this->query("SELECT * FROM $table" . $sql, $params);
		return $result[$i]; 
	}
	
	public function getPosts($table,$username, $sql = '', $params = array())
	{
		return $this->query("SELECT * FROM $table WHERE username='$username'" . $sql, $params);
	}  
}

?>