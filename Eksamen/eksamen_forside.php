<html>
	<head>
	<meta charset="utf8">
		<style>
		#logo {
			width: 100%;
			margin: 0 auto;
			position: fixed;
			bottom: 0;
			text-align: center;
		}
		</style>
	</head>
		<body>
			<div style="text-align: center";>
				<h1> Laurvig A/S</h1>
				Her er forsiden uden at være logget ind
			</div>
			<div style="text-align: right;">
				<h1>Login</h1>
				<form action="logincheck.php" method="post">
				Username: <input type="Text" name="Username" size="10" placeholder="Username" autofocus required>
				<br>
				Password: <input type="Password" name="Password" size="10" placeholder="Password" required>
				<br>
				<input type="Submit" name="Log Ind" value="Log Ind">
				</form>
				<form action="opret.php" method="post">
				<input type="submit" name="Opret" value="Opret bruger">
				</form>
			</div>
			
			<div id="logo">
				<img src="support.jpg" alt="logo" style="width: 25%; height: 20%;">
			</div>
		</body>
</html>