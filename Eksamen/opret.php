<?php
if( isset( $_POST["username"] ) && isset( $_POST["password"] ) && isset( $_POST["e-mail"] )) {
		$host="localhost";
		$username="root";
		$password="";
		$database="eksamen_webside";
		$tabel="bruger";
		
		//nu opretter vi forbindelse til vores database, hvis det ikke lykkedes får vi en fejlmeldning
		
		$conn = new mysqli( $host, $username, $password, $database );
		
		if (!$conn)
		{
		die("connection failed: " .mysqli_connect_error());
		}
		
		//bruger navn og password som vi oprettede i vores database
		
		$my_username=$_POST['username'];
		$my_password=$_POST['password'];
		$my_email=$_POST['e-mail'];
		//nu laver vi en sql strang som gør os i stand til at hente
		//de oplysninger vi skal bruge for at logge ind, fra vores database
		$sql="INSERT INTO $tabel VALUES( NULL, \"$my_username\", \"$my_password\", \"$my_email\")";
		$stmt = $conn->prepare( $sql );
		$stmt->execute();

		header( "Location: login.php" );
}
?>
<html>
	<head>
	 <meta charset="utf8">
	</head>
		<body>
			<div style="text-align: center";>
			<h1> Opret Bruger</h1>
			Udfyld felterne for at oprette en bruger profil
			<br></br>
				<form action="opret.php" method="post">
				Brugernavn: <input type="text" name="username" size="10" placeholder="Brugernavn" autofocus required><br></br>
				Password: <input type="Password" name="password" size="10" placeholder="Password" required><br></br>
				Email: <input type="text" name="e-mail" size="25" placeholder="E-mail" required><br></br>
				<input type="submit" name="opretbruger" value="Opret bruger">
				</form>
			</div>
</html>

