<html>
	<head>
		<meta charset="utf-8" />
		<title> Gæt et tal</title>
		<h1> Gæt tal mellem 0 til 100</h1>
	</head>
		<body>
			<table style="width:100%">
				<tr>
					<td>Her skal du gætte et tal mellem 0-100<br>
					Der vil komme hjælpende instukster hvis du ikke gætter rigtigt</td>
				</tr>
					<tr>
						<td><br><form action="spil.php" method="post">
						Tal: <input type="text" name="number"/>
						<input type="submit" value="Send Gæt"/></td>
					</tr>
			</table>
					<?php
					session_start ();

						if(isset($_SESSION['send gæt']))
						{
						$_SESSION['send gæt']=$_SESSION['send gæt']+1;
						}
						else
						{
						$_SESSION['send gæt']=1;
						$_SESSION['tal']=rand(1,100);
						}
						if($_SESSION['send gæt']==10)
						{
						session_destroy();
						echo 'Du har ikke gættet tallet <br>';
						echo 'Vil du prøve igen', '<br>', '<br>';
						}
						elseif ($_POST["number"]==$_SESSION['tal'])
						{
						session_destroy();
						}
						
						if( isset( $_POST["number"])){
						if ($_POST["number"]<0 OR $_POST["number"]>100)
						{
						echo 'Ugylditg nummer';
						}
						elseif ($_POST["number"]-$_SESSION['tal']>50) {
						echo 'Langt forbi';
						}
						elseif ($_POST["number"]-$_SESSION['tal']>19 AND $_POST["number"]-$_SESSION['tal']<49 ) {
						echo 'Ikke helt ved siden af';
						}
						elseif ($_POST["number"]==$_SESSION['tal']) {
						echo ' JAAA!!!! DU FANDT DET!';
						}
						else {
						echo 'Tampen brænder';
						}}
					?>
		</body

</html>