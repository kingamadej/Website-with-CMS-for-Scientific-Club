<?php

	session_start();
	
	if ((!isset($_POST['login'])) || (!isset($_POST['haslo'])))
	{
		header('Location: logowanie.php');
		exit();
	}

	require_once "connect.php";

	$polaczenie = @new mysqli($host, $db_user, $db_password, $db_name);
	
	if ($polaczenie->connect_errno!=0)
	{
		echo "Error: ".$polaczenie->connect_errno;
	}
	else
	{
		$login = $_POST['login'];
		$haslo = $_POST['haslo'];
		
		$login = htmlentities($login, ENT_QUOTES, "UTF-8");
		$haslo = htmlentities($haslo, ENT_QUOTES, "UTF-8");
	
		if ($rezultat = @$polaczenie->query(
		sprintf("SELECT * FROM nazwa_tabeli WHERE user='%s' AND pass='%s'",
		mysqli_real_escape_string($polaczenie,$login),
		mysqli_real_escape_string($polaczenie,$haslo))))
		{
			$ilu_userow = $rezultat->num_rows;
			if($ilu_userow>0)
			{
				$_SESSION['zalogowany'] = true;
				
				$wiersz = $rezultat->fetch_assoc();
				$_SESSION['id'] = $wiersz['id'];
				$_SESSION['user'] = $wiersz['user'];
				
				$_SESSION['email'] = $wiersz['email'];
				
				
				unset($_SESSION['blad']);/*wywal zmienna z sesji*/
				$rezultat->free_result();/*pozbywany sie z pamieci not needed results*/
				header('Location: panel.php');
				
			} else {
				
				$_SESSION['blad'] = '<span style="color:red;"></br>&ensp;&nbsp;Nieprawidłowy login lub hasło!</span>';
				header('Location: logowanie.php');
				
			}
			
		}
		
		$polaczenie->close();
	}

?>