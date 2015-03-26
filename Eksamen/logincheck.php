<?php
		session_start();
		$host="localhost";
		$username="root";
		$password="";
		$database="eksamen_webside";
		$tabel="bruger";
		
		$conn = new mysqli( $host, $username, $password, $database );
		
		if (!$conn)
		{
		die("connection failed: " .mysqli_connect_error());
		}
		
		$my_username=$_POST['Username'];
		$my_password=$_POST['Password'];
		
		//nu laver vi en sql strang som gør os i stand til at hente
		//de oplysninger vi skal bruge for at logge ind, fra vores database
		
		$sql="SELECT * FROM $tabel WHERE username='$my_username' and password='$my_password'";
		$stmt = $conn->prepare( $sql );
		$stmt->execute();
		
		$stmt->store_result();

		$count = $stmt->num_rows();
		echo $count;
		
		
		//Så siger vi til den at der kun må komme et svar tilbage med de her oplysninger
		
		if ($count == 1)
		{
		$_SESSION['Log ind']=1;
		header("location:webside.php");
		}
		else
		{
		header("location:retur.php");
		}
?>