<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1,shrink-to-fit=no">
    <title>ŚTP</title>
    <title>Światowy Tydzień Przedsiębiorczości - Koło Naukowe Przedsiębiorczości i Innowacji</title>
	<meta name="description" content="Jesteśmy częścią Global Entrepreneurship Network. a Światowy Tydzień Przedsiębiorczości (ŚTP) to nasz czołowy projekt. Sprawdź kiedy odbywa się Światowy Tydzień Przedsiębiorczości." />
	<meta name="keywords" content="ŚTP, GEN, Global Entrepreneurship Network, knpi, uek, uniwersytet ekonomiczny w krakowie, światowy tydzień przedsiębiorczości, rozwój, działalność, firma, biznes" />
	<meta name="author" content="Kinga Madej">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

    <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon">

    <link href="stpb.css?<?=filemtime("stpb.css")?>" rel="stylesheet" type="text/css" />
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
                    
                    <li class="nav-item active">
						<a class="nav-link" href="knpi-aktualnosci"> AKTUALNOŚCI </a>
					</li>
                    
          <li class="nav-item dropdown aktywna active">
						<a class="nav-link dropdown-toggle" href="knpi-projekty" data-toggle="dropdown" role="button" aria-expanded="false" id="submenu" aria-haspopup="true"> PROJEKTY </a>
						
						<div class="dropdown-menu" aria-labelledby="submenu">
						
              <a class="dropdown-item" href="knpi-projekty"> PROJEKTY </a>
              <a class="dropdown-item aktywna" href="swiatowy-tydzien-przedsiebiorczosci"> ŚTP </a>
							
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
                    
                    <li class="nav-item active">
						<a class="nav-link" href="knpi-kontakt"> KONTAKT </a>		
					</li>
                      
                
                </ul>
            
            </div>

        </nav>
    </header>
    <div class="col-12 pt-4 pl-2 pr-2 pb-1 zaproszenie">
		<p>
		Czas jest darmowy, ale i bezcenny.
		</br>
		Zainwestuj go w siebie!
		</p>
	</div>
    <div onclick="rozwin();" class="col-12 p-3 wybierz">
		<h1 class="h3">Światowy Tydzień Przedsiębiorczości</h1>
	</div>

	
    


    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="4"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="5"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="6"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="img/cropped2.jpg" class="d-block w-100" alt="slider-image">
    </div>
    <div class="carousel-item">
      <img src="img/cropped4.jpg" class="d-block w-100" alt="slider-image">
    </div>
    <div class="carousel-item">
      <img src="img/cropped3.jpg" class="d-block w-100" alt="slider-image">
    </div>
    <div class="carousel-item">
      <img src="img/cropped1.jpg" class="d-block w-100" alt="slider-image">
    </div>
    <div class="carousel-item">
      <img src="img/cropped9.jpg" class="d-block w-100" alt="slider-image">
    </div>
    <div class="carousel-item">
      <img src="img/cropped7.jpg" class="d-block w-100" alt="slider-image">
    </div>
    <div class="carousel-item">
      <img src="img/cropped14.png" class="d-block w-100" alt="slider-image">
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
  

<div class="container p-4">
        <div class="row">
            <div class="col-12 col-lg-6 p-2 zdj0">
                <img src="img/GEN.png" alt="global entrepreneurship week">
            </div>
            
            <div class="col-12 col-lg-6 p-2 tekst1">
                    <p>
                        Światowy Tydzień Przedsiębiorczości to  największe wydarzenie na Uniwersytecie Ekonomicznym w&nbsp;Krakowie, podczas którego przez tydzień odbywają się warsztaty, prelekcje, dyskusje poruszające różne aspekty przedsiębiorczości. 
                    </p>
            </div>
        </div>	
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

   <script>
        function rozwin()
        {
            if(document.getElementById('demo').style.display != 'none'){
                $("#demo").fadeOut(500);
                //document.getElementById('demo').style.display = 'none'}//
                document.getElementById('btn').classList.remove('icon-cancel');
                document.getElementById('btn').classList.add('icon-down-open-1');
            }
            else{
                //document.getElementById('demo').style.display = '';//
                $("#demo").fadeIn(500);
                document.getElementById('btn').classList.remove('icon-down-open-1');
                document.getElementById('btn').classList.add('icon-cancel');
            }
        }
    </script>

</body>
</html>


