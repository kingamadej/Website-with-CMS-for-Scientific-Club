<?php
    session_start();
    
    if (!isset($_SESSION['zalogowany']))
    {
        header('Location: logowanie.php');
        exit();
    }
    include "logic.php";

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

    <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon">

    <!--<link rel="stylesheet" href="aktualnosci-panel.css" type="text/css" />-->
    <link href="aktualnosci-panel.css?<?=filemtime("aktualnosci-panel.css")?>" rel="stylesheet" type="text/css" />

    <link rel="preconnect" href="https://fonts.gstatic.com"/>
    <link href="https://fonts.googleapis.com/css2?family=Lato&display=swap" rel="stylesheet"/>
    
    <link href="css/fontello.css?<?=filemtime("css/fontello.css")?>" rel="stylesheet" type="text/css" />

    <title>Wpis podgląd</title>

    <script>
        function pokaz() {
            document.getElementById('kontrolka').style.opacity = '1';
            document.getElementById('kontrolka').style.top = '30%';
            document.getElementById('freezeLayer').style.display = '';
        }

        function anuluj() {
            document.getElementById('kontrolka').style.opacity = '0';
            document.getElementById('kontrolka').style.top = '-30%';
            document.getElementById('freezeLayer').style.display = 'none';
        }

    </script>
</head>
<body>
    <div class="pomoc"><a class="strzalka" href="wpisy.php"><i class="demo-icon icon-left"></i></a>&emsp;&ensp;<a href="logout.php">Wyloguj się&nbsp;<i class="demo-icon icon-logout"></i></a></div>

   <div class="container mt-5">
        <?php foreach($query as $q){?>

            <div id="freezeLayer" style="display:none;"></div>
            
            <div id="calosc">
                <div id="kontrolka">
                    <div id="potwierdzenie" >Potwierdzenie</div>
            
                    <div id="zapytanie">Czy na pewno chcesz usunąć ten wpis?</div>

                    <div id="pudelko">
                        <form id="form-view" method="POST">
                            <input type="text" hidden value='<?php echo $q['id']?>' name="id">
                            <button name="delete">Ok</button>
                        </form>
                        <button onclick="anuluj()" name="anul">Anuluj</button>
                    </div>
                </div>
            </div>
        <?php } ?>

        <?php foreach($query as $q){?>
            <div class="bg-dark p-5 rounded-lg text-white text-center">
                <h2><?php echo $q['title'];?></h2>

                <div class="d-flex mt-2 justify-content-center align-items-center">
                    <a href="edit.php?id=<?php echo $q['id']?>" class="btn btn-light btn-sm" name="edit">Edytuj</a>
                    <form>
                        <a onclick="pokaz()" class="btn btn-danger btn-sm ml-2" name="xd" >Usuń</a>
                    </form>
                </div>

            </div>
            <p class="mt-5 border-left border-dark pl-3"><?php echo $q['content'];?></p>
        <?php } ?>    

        <a href="wpisy.php" class="btn btn-outline-dark my-3">Powrót do listy</a>
   </div>

    <!-- Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>

</body>
</html>