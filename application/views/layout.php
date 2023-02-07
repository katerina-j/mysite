<div class="content">
	<div class="fixed-width">
	<?php
		if ($_GET['id']==1){}
		else if ($_GET['id']==2){include 'Login.php';}
		else if($_GET['id']==3){include 'Registration.php';}
		else if ($_GET['id']==4){include 'List of posts.php';}
		else if($_GET['id']==5){include 'Profile.php';}
		else if ($_GET['id']==6){include 'Site navigation.php';}
	?>
			
	</div>
</div>