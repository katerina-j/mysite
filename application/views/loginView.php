<?php
$model = new ModelLogin;
$db = new Model;
$username=file_get_contents('username.txt');
if ($username!='') {
    $data=$db->getPosts('users',$username);
    foreach($data as $row) {
		$name=$row['name'];
		$email=$row['email'];
		$id=$row['id'];
		//$username=$row['username'];
	}
    $patch="img/".$name;
?>
<div class="content">
	<div class="fixed-width">
    <h1>Name: <?php echo $name;?> </h1>
	<p id="content-links">
	<a href=""> contacts:  <?php echo $email;?></a>
	<br>
	</p>
	</div>
</div>
<div class="watch-listen">
<h2>photo</h2>
<img src=<?php echo "$patch" ?> width='20%' />
</div>
	
<?php
include('application/views/loadView.php');
include('application/views/exitView.php');
?> 

<a href='/profile'>Изменить</a> 
<?php
}
	
?>
