<html>
	<Head>
		<meta charset="utf8" />
		<title>Forum</title>
	</head>
		<Body>
			<div style="width: 400px; margin: 100px auto 0 auto;">
				<h1>Fælles Forum</h1>
				<form action="" method="post">
				Navn: <input type="Text" name="navn" size="20" autofocus required>
				<p>
				E_Mail: <input type="text" name="e_mail" size="20" required>
				<p>
				Besked:<br>
				<textarea name="besked" id="besked" cols="30" rows="6" required></textarea>
				<p>
				Adresse: <input type="text" name="adresse" required>
				<p>
				Mobil nr.: <input type="text" name="mobil_nr" required>
				<p>
				<input type="submit" name="save" value="Save">
				<input type="reset" name="reset" value="Reset">
				</form>
				<form action="" method="post">
				<input type="submit" name="delete" value="Delete all massages">
				<br>
				<input type="submit" name="read" value="Read all massages">
				<input type="submit" name="logout" value="logout">
				</form>
			</div>	
		</Body>
</html>		

<?php
	date_default_timezone_set("europe/copenhagen");
	date("m-d-y") . date("h:i");
	
		//her laver vi nogle vaiabler til de informationer der skal gemmes i text dokumentet
if (isset($_POST['save']))
	{
	$navn=$_POST['navn'];
	$mail=$_POST['e_mail'];
	$besked=$_POST['besked'];
	$adresse=$_POST['adresse'];
	$mobil=$_POST['mobil_nr'];
	$date=date("m-d-y");
	$time=date("h:i");
	
		//her giver vi besked til at den skal åbne en text filen og gemme dataerne
	$file= "forum.txt";
	$open=fopen($file, 'a') or die("can't open file");
	$stringdata='<br>Date: '.$date. '<br>Time: ' .$time. '<br><br>Navn: '.$navn. '<br>e-mail: ' .$mail. '<br>Besked: ' .$besked. '<br>Adresse: ' .$adresse. '<br>Mobil-nr.: ' .$mobil. '<br>';
	fwrite($open, $stringdata);
	fclose($open);
	
	echo 'Besked er gemt!';
	}
	
		//Nu laver vi en streng der går det muligt at læse de skrevne beskeder

if (isset($_POST['read']))
	{
	$myfile = fopen("forum.txt", "r") or die("Unable to open file!");
	echo fgets($myfile);
	fclose($myfile);
	}
	
		//her laver vi en streng til at slette alle beskeder der har været skrevet
		
if (isset($_POST['delete']))
	{
	$handle = fopen('forum.txt', 'r+');
	ftruncate($handle, 0);
	fclose($handle);
	
	echo 'Beskeder er slettet';
	}
if (isset ($_POST['logout']))
	{
	session_destroy();
	header('location:login.php');
	}	 


?>