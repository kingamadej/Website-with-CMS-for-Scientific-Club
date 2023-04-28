<?php
    
    include "logic.php";

?>

<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1,shrink-to-fit=no">
    <title>Wpis</title>
	<meta name="description" content="Śledż aktualności, aby nie przegapić żadnego wydarzenia. Organizujemy webinary, szkolenia i konferencje. Tutaj znajdziesz informacje na temat aktualnej rekrutacji do naszego koła KNPI." />
	<meta name="keywords" content="aktualnośći, wydarzenia, webinary, informacje, konferencje, szkolenia, rekrutacja" />
	<meta name="author" content="Kinga Madej">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

    <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon">

    <link href="tresc.css?<?=filemtime("tresc.css")?>" rel="stylesheet" type="text/css" />
    <!--<link rel="stylesheet" href="proba.css" type="text/css" />-->

    <link rel="preconnect" href="https://fonts.gstatic.com"/>
    <link href="https://fonts.googleapis.com/css2?family=Lato&display=swap" rel="stylesheet"/>
    
    <!--<link rel="stylesheet" href="css/fontello.css" type="text/css"/>-->
    <link href="css/fontello.css?<?=filemtime("css/fontello.css")?>" rel="stylesheet" type="text/css" />
    
    <script
  src="https://code.jquery.com/jquery-3.6.0.js"
  integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk="
  crossorigin="anonymous"></script>
    
  <script>
      window.onload = function load () {
        window.setTimeout(function () {$('#loaderxd').fadeOut('slow');}, 300);
      };
    </script>
    
   

</head>
<body onresize = "change_heading();">
    <div class="loader_bg" id="loaderxd">
		<div class="loader"></div>
	</div>

    <header>
        <nav class="navbar navbar-dark bg-jumpers navbar-expand-xl" >
            <a class="navbar-brand" href="https://knpi.uek.krakow.pl/">
                    <img src="img/logo-knpi-bez-tla.png" alt="logo KNPI" width="200" height="auto" class="d-inline-block mr-2 align-bottom">
            </a>

            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#mainmenu" aria-controls="mainmenu" aria-expanded="false" aria-label="Przełącznik nawigacji">
				    <span class="navbar-toggler-icon"></span>
			</button>

            <div class="collapse navbar-collapse" id="mainmenu">
			
                <ul class="navbar-nav mr-auto">
                
                    <li class="nav-item active">
						<a class="nav-link" href="o-nas"> O NAS </a>
					</li>
                    
                    <li class="nav-item aktywna active">
						<a class="nav-link" href="knpi-aktualnosci"> AKTUALNOŚCI </a>
					</li>
                    
                    <li class="nav-item dropdown active" id="proj">
                        
						<a class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false" id="submenu" aria-haspopup="true"> PROJEKTY </a>
						
						<div class="dropdown-menu" aria-labelledby="submenu">
						
                            <a class="dropdown-item" href="knpi-projekty"> PROJEKTY </a>
                            <a class="dropdown-item" href="swiatowy-tydzien-przedsiebiorczosci"> ŚTP </a>
							
							<div class="dropdown-divider"></div>
							
                            <a class="dropdown-item" href="i-ogolnopolska-konferencja-naukowa-przedsiebiorczosc-wobec-wyzwan-xxi-wieku-2022"> Konferencja Naukowa 2022</a>
							<a class="dropdown-item" href="swiatowy-tydzien-przedsiebiorczosci-2021"> ŚTP 2021 </a>
							<a class="dropdown-item" href="swiatowy-tydzien-przedsiebiorczosci-2020"> ŚTP 2020 </a>
						
						</div>
						
					</li>
                    
                    <li class="nav-item active">
						<a class="nav-link" href="knpi-faq"> FAQ </a>
					</li>
                    
                    <li class="nav-item active">
						<a class="nav-link" href="knpi-wspolpraca"> WSPÓŁPRACA </a>
					</li>
                    
                    <li class="nav-item active">
						<a class="nav-link" href="knpi-kontakt"> KONTAKT </a>		
					</li>
                      
                
                </ul>
            
            </div>

        </nav>
    </header>

    <div class="container mt-5">
        <?php foreach($query as $q){?>
                <div class="rounded-lg text-center xdd"><!--bg-dark p-5 text-white -->
                    <h1 id="naglowek"><?php echo $q['title'];?></h1>
                    <?php echo"<img src='".'img/'.$q['image']."' class='mb-1 mt-2 zdj0'>";?>
                </div>
                <p class="mt-5 xdd border-left border-dark pl-3"><?php echo $q['content'];?></p>
            <?php } ?>    
    </div>

    <div class="socials">
                    
            <a class="fb" href="https://www.facebook.com/KNPI.uek/?fb_dtsg_ag=Adx8YS8ZFQxxjtMlucE4lP_Z3-JIcGSI-QeU9MSfvrhMJQ%3AAdwWRF5mKnklBTUPMO1hZtlpuAuOD-GIoZXauZ2b2tIj0A" target="_blank">
                <div class="fb">
                    <i class="icon-facebook"></i>
                </div>
            </a>
                    
            <a class="ig" href="https://www.instagram.com/knpi_uek/" target="_blank">
                <div class="ig">
                    <i class="icon-instagram"></i>
                </div>
            </a>
                    
            <a class="in" href="https://pl.linkedin.com/company/knpiuek" target="_blank">
                <div class="in">
                    <i class="icon-linkedin"></i>
                </div>
            </a>
                    
            <div style="clear:both"></div>
                
    </div>

    <footer>
        
            <div class="links">
                
                <a href="https://uek.krakow.pl/" target="_blank"><img src="img/ueklogo.png" alt="uek logo"/></a>
                <a href="https://knpi.uek.krakow.pl/"><img src="img/logo-knpi-bez-tla.png" alt="logo KNPI"/></a>

            </div>
            
            
            <div class="info">
                2021 &copy; KNPI
            </div>
        
    </footer>
   
    
    <!--<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>-->
	
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
	
	<script src="js/bootstrap.min.js"></script>           
    
    
    <!-- Bootstrap JS -->
    <!--<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>-->
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>

    <script>
        function change_heading () {
            if (window.innerWidth < 400) {
            document.getElementById("naglowek").className = "h4";
            }  
            else {
            document.getElementById("naglowek").className = "h2"; 
            }    
            
        }
        change_heading();

    </script>
</body>
</html>


