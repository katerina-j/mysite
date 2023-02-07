<?php
$db = new Model;
$username=file_get_contents('username.txt');
$data=$db->getPosts('users',$username);
foreach($data as $row) {
	$name=$row['name'];
	$email=$row['email'];
	$username=$row['username'];
	$password=$row['password'];
	$image=$row['image'];
	}
?>

<div class="form">  
    <h1>Change information</h1>  
    <form method="post" accept-charset="utf-8">  
        <p>Имя: <input type="text" name="name2" placeholder="<?php echo $name; ?>" /></p>  
        <br/>  
        <p>Email: <input type="text" name="email2" placeholder="<?php echo $email; ?>" /></p>
        <br/>  
        <p>Пароль: <input type="password" name="password2" " /></p> 
        <br/>  
        <input type="submit" name="Change" value="Change" />  
    </form>    
</div>  
