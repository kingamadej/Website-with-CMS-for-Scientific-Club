<?php
	
	session_start();

	if ((isset($_SESSION['zalogowany'])) && ($_SESSION['zalogowany']==true))
	{
		header('Location: panel.php');
		exit();
	}

?>

<!DOCTYPE HTML>
<html lang="pl">
<head>
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1"/> <!--urządzenia mobilne-->
	<title>Logowanie KNPI</title>
	<meta name="description" content="Logowanie KNPI" />
	<meta name="keywords" content="#" />
	<meta name="author" content="Kinga Madej">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
	
	<link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon">
		
	<!--<link rel="stylesheet" href="logowanie.css" type="text/css" />-->
	<link href="logowanie.css??<?=filemtime("logowanie.css?")?>" rel="stylesheet" type="text/css" />

	<link rel="preconnect" href="https://fonts.gstatic.com"/>
	<link href="https://fonts.googleapis.com/css2?family=Lato&display=swap" rel="stylesheet"/>
	
	<link href="css/fontello.css?<?=filemtime("css/fontello.css")?>" rel="stylesheet" type="text/css" />

	<script>
		function myFunction() {
		var x = document.getElementById("myInput");
		if (x.type === "password") {
			x.type = "text";
		} else {
			x.type = "password";
		}
	}
	</script>
	
</head>

<body>

	<div id="container">
		<form action="zaloguj.php" method="post">
			
			<input type="text" name="login" placeholder="login" onfocus="this.placeholder=''" onblur="this.placeholder='login'" >
			
			<input type="password" name="haslo" id="myInput" placeholder="hasło" onfocus="this.placeholder=''" onblur="this.placeholder='hasło'" >

			<br></br><!-- An element to toggle between password visibility -->
			<div style="color:#3b5abe; font-size: 17px;"><input id="check" type="checkbox" onclick="myFunction()"> Pokaż hasło</div>
			
			<input type="submit" value="Zaloguj się">
			
		</form>

		<?php
			if(isset($_SESSION['blad'])) echo $_SESSION['blad'];
		?>
	</div>


	
</body>
</html>