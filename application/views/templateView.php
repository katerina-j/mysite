html>
    <head>
	    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
		<title>Site</title>
		<link rel="stylesheet" type="text/css" href="/css/style.css" />
		<script src="jquery-3.2.1.min.js"></script>
        <script src="jquery.maskedinput.min.js"></script>
        <script>
            $(document).ready(function() {
            $("#email").mask("aaa@a-z.a-z");
		    $("#email2").mask("aaa@a-z.a-z");
        })
        </script>	
	</head>
	<body>
	<?php include ('header.php'); ?>
	<?php include ('navigationView.php'); ?>
	<?php 
	//include 'layout.php';
	?>
	<div class="layout">
		<div class="fixed-width"> 
			<?php include 'application/views/'.$content_view; ?>
	    </div>
	</div> 
	<?php include 'footer.php'; ?>
    </body>
</html>
