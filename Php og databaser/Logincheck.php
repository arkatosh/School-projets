<html>
<meta charset="utf8" />
	<head>
		<title> Login </title>
		<h1>Login</h1>
	</head>
		<body>
			<form name="login" method="post" action="Logincheck.php">
			Username:<br>
			<input type="text" name="Username">
			<br>
			Password:<br>
			<Input type="password" name="Password">
			<br><br>
			<br>
			<input type="Submit" name="Login" value="Login">
			</form>
		</body>	
</html>			

<?php
	session_start();
	$host="localhost";
	$username="root";
	$password="";
	$database="eks_db";
	$tabel="login";
	
	$conn=mysqli_connect($host, $username, $password, $database);
	
	if (!$conn)
	{
	die("Connection failed: " . mysqli_connect_error());
	}
	
	if(!isset($_SESSION['Login']))
	{
	$_SESSION['Login']=1;
	}
	else
	{
	$_SESSION['Login']++;
	}
	if($_SESSION['Login']>3)
	{
	$_SESSION['Login']=1;
	}
	
	$my_username=$_POST["Username"];
	$my_password=$_POST["Password"];
	
	$sql="SELECT * FROM $tabel WHERE Username='$my_username' and Password='$my_password'";
	$resultat = mysqli_query($conn, $sql);
	
	$count=mysqli_num_rows($resultat);

	if ($count == 1)
	{
	$_SESSION['logincheck'] = 1;
	header("location:loggetind.php");
	}
	elseif ($_SESSION['Login']==3)
	{
	header("location:http://www.google.com");
	}
	else
	{
	echo 'Forkert brugernavn eller password';
	}
	
?>