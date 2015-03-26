<html>
	<head>
		<meta charset="utf-8" />
		<title> Valid E-mail </title>
		<h1>Indtast E-mail</h1>
	</head>
			<body>
				<form action="validemail.php" method="post">
				E-mail: <input type="text" name="E-mail"/>
				<input type="submit" value="Send"/>
					<?php
					if(isset($_POST["E-mail"])){
						$mail=$_POST["E-mail"];
						$lgd=strlen ($mail);
						$valid=substr_count ($mail,"@");
						$str=strstr ($mail, ".com");
						$sub=substr ($mail,-4);
						if ($lgd>7 AND $mail<30){
							if ($valid==1){
								if ($sub=='.dk'){
									echo 'Valid E-mail';
								} else {
									echo 'Ugyldig E-mail';
								}
							} else {
								echo 'Ugyldig E-mail';
							}
						} else {
						echo 'Ugyldig E-mail';
						}
					}
					?>
			</body>
</html>			