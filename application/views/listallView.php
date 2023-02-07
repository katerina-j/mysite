<h1>Посты</h1>
<p>
<table>
Все Ваши посты 
<tr><td>Название статьи</td><td>Текст статьи</td><td>Дата</td></tr>
<?php
$db = new Model;
$data=$db->getAll('posts');
foreach($data as $row) {
	echo '<tr><td>'.$row['title'].'</td><td>'.$row['text'].'</td><td>'.$row['data'].'</td></tr>';
}
		
?>
</table>
</p>

