<?php
if (file_get_contents('username.txt')!='') {
?>	
	
<h1>Посты</h1>
<p>
<table>
Все Ваши посты 
<tr><td>Название статьи</td><td>Текст статьи</td><td>Дата</td></tr>
<?php
	$db = new Model;
    $username=file_get_contents('username.txt');
    $data=$db->getPosts('posts',$username);
	foreach($data as $row) {
		echo '<tr><td>'.$row['title'].'</td><td>'.$row['text'].'</td><td>'.$row['data'].'</td></tr>';
	}
	include_once('application/views/list_post_view.php');	
?>
</table>
</p>

<?php
include_once('application/views/exit_view.php');
} else {
	echo 'войдите в аккаунт!';
}

