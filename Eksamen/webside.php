<?php
	if (isset ($_POST['log_ud']))
	{
	session_destroy();
	header('location:eksamen_forside.php');
	}

?>


<html>
	<head>
		<meta charset="utf8">
	</head>
		<body>
		<div style="text-align: center";>
			velkommen til hjemmesiden som bruger
		<br></br>
		<form action="webside.php" method="POST">
		<input type="submit" value="log ud" name="log_ud">
		</body>
		
</html>
