<html>
<meta charset="utf8" />
	<head>
		<title> Login </title>
		<h1>Login</h1>
	</head>
</html>
	<?php
		session_start();
		$host="localhost";
		$username="root";
		$password="";
		$database="fealles_forum";
		$tabel="bruger";
		
		//nu opretter vi forbindelse til vores database, hvis det ikke lykkedes får vi en fejlmeldning
		
		$conn = mysqli_connect($host, $username, $password, $database);
		
		if (!$conn)
		{
		die("connection failed: " .mysqli_connect_error());
		}
		
		//bruger navn og password som vi oprettede i vores database
		
		$my_username=$_POST['Username'];
		$my_password=$_POST['Password'];
		
		//nu laver vi en sql strang som gør os i stand til at hente
		//de oplysninger vi skal bruge for at logge ind, fra vores database
		
		$sql="SELECT * FROM $tabel WHERE Username='$my_username' and Password='$my_password'";
		
		$result =mysqli_query($conn, $sql);
		
		//her laver vi en steng der tæller antal resultater vi for ud fra vores sql SELECT streng
		
		$count=mysqli_num_rows($result);
		
		//Så siger vi til den at der kun må komme et svar tilbage med de her oplysninger
		
		if ($count == 1)
		{
		$_SESSION['Log ind']=1;
		header("location:forum.php");
		}
		else
		{
		header("location:retur.php");
		}
		?>