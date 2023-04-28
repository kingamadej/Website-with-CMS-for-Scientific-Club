<?php
    
    include "logic.php";

?>

<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1,shrink-to-fit=no">
    <title>Kontakt</title>
	<meta name="description" content="Ciekawa współpraca albo nurtujące pytanie? Skontaktuj się z nami! E-mail: knpi.uek@gmail.com. Znajdź nasz także na Facebooku Koło Naukowe Przedsiębiorczości i Innowacji KNPI, instagramie knpi_uek i linkedinie!" />
	<meta name="keywords" content="kontakt, współpraca, pytanie, knpi, koło naukowe przedsiębiorczości i innowacji, innowacje, e-mail, email, prelegent, uek, uniwersytet ekonomiczny w krakowie, dr Marcin J. Piątkowski" />
	<meta name="author" content="Kinga Madej">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

    <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon">

    <link href="kontaktb.css?<?=filemtime("kontaktb.css")?>" rel="stylesheet" type="text/css" />
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
<body>
    <div class="loader_bg" id="loaderxd">
		<div class="loader"></div>
	</div>

    <header id="body">
        <nav class="navbar navbar-dark bg-jumpers navbar-expand-xl" >
            <a class="navbar-brand" href="https://knpi.uek.krakow.pl">
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
                    
                    <li class="nav-item active">
						<a class="nav-link" href="knpi-aktualnosci"> AKTUALNOŚCI </a>
					</li>

                   
                    <li class="nav-item dropdown active" id="proj">
                        
						<a class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false" id="submenu" aria-haspopup="true"> PROJEKTY </a>
						
						<div class="dropdown-menu" aria-labelledby="submenu">
						
                            <a class="dropdown-item" href="knpi-projekty"> PROJEKTY </a>
                            <a class="dropdown-item" href="swiatowy-tydzien-przedsiebiorczosci"> ŚTP </a>
							
							<div class="dropdown-divider"></div>
							
                            <a class="dropdown-item" href="i-ogolnopolska-konferencja-naukowa-przedsiebiorczosc-wobec-wyzwan-xxi-wieku-2022"> Konferencja Naukowa 2022</a>
                            <a class="dropdown-item" href="ii-ogolnopolska-konferencja-naukowa-przedsiebiorczosc-wobec-wyzwan-xxi-wieku-2023"> Konferencja Naukowa 2023</a>
							<a class="dropdown-item" href="swiatowy-tydzien-przedsiebiorczosci-2022"> ŚTP 2022 </a>
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
                    
                    <li class="nav-item aktywna active">
						<a class="nav-link" href="knpi-kontakt"> KONTAKT </a>		
					</li>
                      
                
                </ul>
            
            </div>

        </nav>
    </header>

    <!--<div class="col-12 mx-0 my-0 tlo">
        <h3>SKONTAKTUJ SIĘ Z&nbsp;NAMI</h3>
    </div>-->
    <div class="col-12 m-0 dane_kontaktowe">
        <p>
			Koło Naukowe Przedsiębiorczości i&nbsp;Innowacji
			<br></br>
			Rakowicka 27, 31-510 Kraków
			<br></br>
			knpi.uek@gmail.com
		</p>
    </div>

    <div class="col-12 my-4 map">
				<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2560.946246443563!2d19.95293141583731!3d50.06856832268808!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47165b1eec963ba1%3A0x128f85b29388690a!2sUniwersytet%20Ekonomiczny%20w%20Krakowie!5e0!3m2!1spl!2spl!4v1614258045489!5m2!1spl!2spl" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
		</div>	
       
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script> 
   
       <div class="col-12 my-5 opiekun">
				<p>Kontakt z naszym Opiekunem naukowym
				<br></br>
				dr Marcinem J. Piątkowskim:
				<br></br>
				<i>marcin.piatkowski@uek.krakow.pl</i>
				<br></br>
				<a href="https://e-uczelnia.uek.krakow.pl/course/view.php?id=467" target="_blank">[E-wizytówka]</a></p>
        </div>
        <div class="col-12 my-3 zarzad">
				<p>Kontakt z Zarządem: 
				<br></br>
				Prezes Koła - Karolina Skalska
				<br></br>
				<i>knpi.uek@gmail.com</i>
				<br></br>
				<!--V-ce Prezes ds. Marketingu i PR - Natalia Janaszczyk
				<br></br>
				<i>knpi.uek@gmail.com</i>
				<br></br>-->
				V-ce Prezes ds. Kontaktu z Partnerami - Jakub Przybylik
				<br></br>
				<i>knpi.uek@gmail.com </i>
				<br></br>
                V-ce Prezes ds. Wewnętrznych - Maciej Widz
				<br></br>
				<i>knpi.uek@gmail.com </i>
				<br></br>
                V-ce Prezes ds. Finansów - Aleksandra Świętek
				<br></br>
				<i>knpi.uek@gmail.com </i>
				<br></br>
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
                2021 - 2023 &copy; KNPI
            </div>
        
    </footer>

	
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
	
	<script src="js/bootstrap.min.js"></script>           
    
    
    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>

</body>
</html>


