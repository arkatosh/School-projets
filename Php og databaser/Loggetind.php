<html>
	<head>
		<meta charset="utf8" />
	</head>
		<body>
		Velkommen<br>
		<form name="log Ud" method="post" action="Login.php">
			<input type="Submit" name="Log Ud" value="Log Ud">
			</form>
		</body>
		 <?php
		 session_start();
		 
		 if (isset($_POST['Log Ud']))
		 {
		 session_destroy();
		 header('location:login.php');
		 }
		?>
</html>