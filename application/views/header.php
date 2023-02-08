<div class="container">
    <div class="top-bar">
		<div class="fixed-width">
			<div id="logo">
				<img src="images/714.png" width="100%" height="90"/>
			</div>
			<div id="search-box">
			<?php
			if (file_get_contents('username.txt')=='') {
			?>
			    <a href="/login">Вход</a> 
            <?php
            } else {
				echo 'Привет '.file_get_contents('username.txt').'!';
			}
            ?>			
			</div> 
			<div id="search-box">
				<input type="text"
				placeholder="search"/>
			</div> 
		</div>
	</div>