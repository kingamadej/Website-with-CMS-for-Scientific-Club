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
	<title>Panel KNPI</title>
	<meta name="description" content="Panel KNPI" />
	<meta name="keywords" content="#" />
	<meta name="author" content="Kinga Madej">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
	
	<link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon">
		
	<!--<link rel="stylesheet" href="panel.css" type="text/css" />-->
	<link href="panel.css??<?=filemtime("panel.css?")?>" rel="stylesheet" type="text/css" />

	<link rel="preconnect" href="https://fonts.gstatic.com"/>
	<link href="https://fonts.googleapis.com/css2?family=Lato&display=swap" rel="stylesheet"/>
	
	<link href="css/fontello.css?<?=filemtime("css/fontello.css")?>" rel="stylesheet" type="text/css" />
</head>

<body>
	<div class="pomoc"><a href="pomoc.php" title="Kontat z autorem strony">Pomoc<i id="btn" class="demo-icon icon-info-circled"></i></a>&emsp;&emsp;<a href="logout.php">Wyloguj się&nbsp;<i class="demo-icon icon-logout"></i></a></div>
	

	<div class="nazwa-podstrony">STRONA GŁÓWNA&emsp;&emsp;<button onclick="kontrolka2()" title="Edytuj podstronę"><i class="demo-icon icon-pencil"></i></button>&emsp;<button onclick="kontrolka()" title="Usuń podstronę"><i class="demo-icon icon-trash"></i></button></div>
	<div class="nazwa-podstrony">O NAS&emsp;&emsp;<button onclick="kontrolka2()" title="Edytuj podstronę"><i class="demo-icon icon-pencil"></i></button>&emsp;<button onclick="kontrolka()" title="Usuń podstronę"><i class="demo-icon icon-trash"></i></button></div>
	<div class="nazwa-podstrony">AKTUALNOŚCI&emsp;&emsp;<a href="wpisy.php"><button title="Edytuj podstronę"><i class="demo-icon icon-pencil"></i></button></a>&emsp;<button onclick="kontrolka()" title="Usuń podstronę"><i class="demo-icon icon-trash"></i></button></div>
	<div class="nazwa-podstrony">PROJEKTY&emsp;&emsp;<button onclick="kontrolka2()" title="Edytuj podstronę"><i class="demo-icon icon-pencil"></i></button>&emsp;<button onclick="kontrolka()" title="Usuń podstronę"><i class="demo-icon icon-trash"></i></button></div>
	<div class="nazwa-podstrony">FAQ&emsp;&emsp;<button onclick="kontrolka2()" title="Edytuj podstronę"><i class="demo-icon icon-pencil"></i></button>&emsp;<button onclick="kontrolka()" title="Usuń podstronę"><i class="demo-icon icon-trash"></i></button></div>
	<div class="nazwa-podstrony">WSPÓŁPRACA&emsp;&emsp;<button onclick="kontrolka2()" title="Edytuj podstronę"><i class="demo-icon icon-pencil"></i></button>&emsp;<button onclick="kontrolka()" title="Usuń podstronę"><i class="demo-icon icon-trash"></i></button></div>
	<div class="nazwa-podstrony">KONTAKT&emsp;&emsp;<button onclick="kontrolka2()" title="Edytuj podstronę"><i class="demo-icon icon-pencil"></i></button>&emsp;<button onclick="kontrolka()" title="Usuń podstronę"><i class="demo-icon icon-trash"></i></button></div>
	<div class="nazwa-podstrony">DODAJ&emsp;&emsp;<button onclick="kontrolka3()" title="dodaj nową podstronę"><i class="demo-icon icon-plus"></i></button></div>

<script>
	
	function kontrolka()
	{
		/*confirm("Czy na pewno chcesz usunąć tą podstronę?");*/
		if (window.confirm('Czy na pewno chcesz usunąć tą podstronę?'))
   		{
   		window.open('http://www.google.com', '_blank');
   		};
	}
	function kontrolka2()
	{
		/*confirm("Czy na pewno chcesz edytować tą podstronę?");*/
		if (window.confirm('Czy na pewno chcesz edytować tą podstronę?'))
   		{
   		window.open('http://www.google.com', '_blank');
   		};
	}
	function kontrolka3()
	{
		/*confirm("Czy na pewno chcesz dodać nową podstronę?");*/
		if (window.confirm('Czy na pewno chcesz dodać nową podstronę?'))
   		{
   		window.open('http://www.google.com', '_blank');
   		};
	}
	
</script>


</body>
</html>