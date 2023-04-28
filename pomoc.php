<?php

	session_start();
	
	if (!isset($_SESSION['zalogowany']))
	{
		header('Location: logowanie.php');
		exit();
	}
	
?>
<!DOCTYPE HTML>
<html lang="pl">
<head>
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1"/> <!--urządzenia mobilne-->
	<title>Pomoc KNPI</title>
	<meta name="description" content="Pomoc KNPI" />
	<meta name="keywords" content="#" />
	<meta name="author" content="Kinga Madej">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
	
	<link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon">
		
	<!--<link rel="stylesheet" href="pomoc.css" type="text/css" />-->
	<link href="pomoc.css??<?=filemtime("pomoc.css?")?>" rel="stylesheet" type="text/css" />

	<link rel="preconnect" href="https://fonts.gstatic.com"/>
	<link href="https://fonts.googleapis.com/css2?family=Lato&display=swap" rel="stylesheet"/>
	
	<link href="css/fontello.css?<?=filemtime("css/fontello.css")?>" rel="stylesheet" type="text/css" />
</head>

<body>
	<div class="pomoc"><a class="strzalka" href="panel.php" title="przejdź do panelu głównego"><i class="demo-icon icon-left"></i></a>&emsp;&emsp;<a class="pomoc-napis" href="#" title="jesteś na stronie z danymi autora do kontaktu">Pomoc<i id="btn" class="demo-icon icon-info-circled"></i></a>&emsp;&emsp;<a href="logout.php">Wyloguj się&nbsp;<i class="demo-icon icon-logout"></i></a></div>

	<h2>Problemy ze stroną</h2>
	<h3>Jeśli wystąpią jakiekolwiek problemy ze stroną zapraszam do kontaktu z autorem strony:</h3>
	<h3>Kinga Madej</h3>
	<h3>kinia.madej2000@gmail.com</h3>
	<h3>Link do&nbsp;<a href="https://www.facebook.com/profile.php?id=100012610959845" target="_blank">Facebooka</a></h3>
	<h3>Link do&nbsp;<a href="https://www.instagram.com/kinia.madej1/" target="_blank">Instagrama</a></h3>
	<h3>Link do&nbsp;<a href="https://www.linkedin.com/in/kinga-madej-35a957221/" target="_blank">Linkedlna</a></h3>


</body>