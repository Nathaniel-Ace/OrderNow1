<?php
  session_start();
?>

<!DOCTYPE html>
<html>
    <head>
        <title>OrderNow</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <link rel="stylesheet" href="./CSS/style.css">
    </head>
    
    <body>
    <!--Um ganz nach oben zu kommen-->
    <a name="top"></a>

    <!--Navbar-->
   <nav class="navbar navbar-expand navbar-light navbar sticky-top" style="background-color: #60abc9;">
    <div class="container-fluid">
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>
        <div class="d-flex justify-content-between w-100">
            <div>
                <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                    <ul class="navbar-nav">
                        
                        <li class="nav-item"><a class="nav-link" href="./inc/Shop.php" style="color: white;">Shop</a></li>
                        <!--<li class="nav-item"><a class="nav-link" href="#" style="color: white;">Über uns</a></li>-->
                        <li class="nav-item"><a class="nav-link" href="./inc/FAQ.php" style="color: white;">Kontakt & Hilfe</a></li>
                    </ul>
                </div>
            </div>
            <h2 style="color: white;">OrderNow</h2>
            <div>
            <ul class="navbar-nav">
                    <?php if(isset($_SESSION['loggedin'])) { ?>
                        <a  href="./inc/shoppingcart.html" role="button" target="_self">
                        <a href="./inc/shoppingcart.html" target="_self"><img src="./IMG/cart.jpg" alt="Warenkorb" style="width: 35px; height: 35px;"></a>
                        <a href="./inc/Profil.php" class="nav-link"><u><?php echo $_SESSION['name'] ?></u></a>
                        <a class="btn btn-primary m-1 btn btn-dark" href="./inc/Logout.php" role="button">Logout</a>
                    <?php } else { ?>
                        <a  href="./inc/shoppingcart.html" role="button" target="_self">
                        <div style="display: inline-block;">
                        <a href="./inc/shoppingcart.html" target="_self"><img src="./IMG/cart.jpg" alt="Warenkorb" style="width: 35px; height: 35px;"></a>
                        <a class="btn btn-primary m-1 btn btn-dark" href="./inc/Login.php" role="button" target="_self">Anmeldung</a>
                        <a class="btn btn-primary m-1 btn btn-dark" href="./inc/Registration.php" role="button" target="_self">Registrierung</a>
                    <?php } ?>
                </ul>
            </div>
        </div>
    </div>
    </nav>

<div class="container-fluid" style="background-color: #60abc9">
<div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
<div class="carousel-indicators">
<button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
<button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
<button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
</div>
<div class="carousel-inner">
<div class="carousel-item active">
  <img src="./IMG/Livingroom.jpg" class="d-block w-100" alt="Header1">
</div>
<div class="carousel-item">
  <img src="./IMG/LR.jpg" class="d-block w-100" alt="Header2">
</div>
<div class="carousel-item">
  <img src="./IMG/LivingR.jpg" class="d-block w-100" alt="Header3">
</div>
</div>
<button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
<span class="carousel-control-prev-icon" aria-hidden="true"></span>
<span class="visually-hidden">Previous</span>
</button>
<button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
<span class="carousel-control-next-icon" aria-hidden="true"></span>
<span class="visually-hidden">Next</span>
</button>
</div>
<h3>WILLKOMMEN</h3>

        <div class="row">
            <div class="col-sm-4 col-md-4" style="background-color: #8dd8f6">
                Willkommen in unserem Online-Shop - Ihr perfektes Shopping-Erlebnis!
                Entdecken Sie eine Welt voller fantastischer Produkte, inspirierender Trends und unschlagbarer Angebote. Bei uns finden Sie alles, was Sie für Ihren persönlichen Stil und Ihren Lifestyle benötigen. Starten Sie noch heute Ihr Shopping-Abenteuer!
            </div>

            <div class="col-sm-4 col-md-4" style="background-color: #8dd8f6;">
                Schnappen Sie sich die besten Deals in unserem Onlineshop!
                Bei uns dreht sich alles um unschlagbare Angebote und Rabatte, die Sie einfach nicht verpassen dürfen. Worauf warten Sie noch? Kommen Sie vorbei und sichern Sie sich Ihre Schnäppchen!
            </div>
            <div class="col-sm-4 col-md-4" style="background-color: #8dd8f6;">
               Werden Sie Teil unserer Shopping-Community!
                Bei uns geht es nicht nur um den Einkauf, sondern auch um die Schaffung einer engen Gemeinschaft von Kunden, die unsere Leidenschaft für tolle Produkte teilen. Treten Sie noch heute unserer Community bei und entdecken Sie einzigartiges Shopping-Vergnügen!         
            </div>
        </div>

    </div>
    </div>

    <div class="maps-container">
        <iframe class="map-frame" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d10629.205863457086!2d16.369299739814107!3d48.23932396770522!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x476d064f65076297%3A0xf00ccf4383a0a61d!2sFachhochschule%20Technikum%20Wien%2C%20H%C3%B6chst%C3%A4dtpl.%205%2F3%2C%201200%20Wien!5e0!3m2!1sde!2sat!4v1666191072142!5m2!1sde!2sat" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        <div class="text-container maps-right">
            <h4>Hier ist unser Standort.</h4> <p> Entdecken Sie unseren zentralen Standort - Ihr Shopping-Hotspot! Tauchen Sie ein in die Fülle an trendigen Boutiquen, Einkaufszentren und Cafés. Ein perfekter Ausgangspunkt für unvergessliche <br> Shopping-Erlebnisse!</p>  </div>
    </div>

   <!-- Footer -->
<footer style="background-color: #60abc9; width: 100%; position: static; bottom: 0; text-align: center;">
  <div class="container p-2">
    <a href="./inc/Impressum.php" style="color: white;">
      Impressum
    </a>
  </div>
</footer>

<div class="collapse" id="collapseExample">
  <div class="card card-body">
  <hr></hr>
        <p>
            Inhalt
        </p>
            <p>Inhalt</p>
            <p>
                Inhalt
            </p>
        </div>
  </div>
</div>
        

        <div class="Hilfe">

   
<div class="collapse" id="collapseExample">
  <div class="card card-body">
  <hr></hr>
        <p>
            Inhalt
        </p>
            <p>Inhalt</p>
            <p>
                Inhalt
            </p>
        </div>
    </div>
</div>
</div>

        


    <br>
     
    <!--Inlcude der Seiten von alter Website können wir aber verändern und mit unseren Sachen dann einfach belegen-->
    <?php 
        $current_page = isset($_GET['page']) ? $_GET['page'] : null;

        switch ($current_page) {

          case 'Home':
            include 'Index.php';
            break;
          
            case 'Shop':
                include 'Shop.php';
                break;

            case 'Anmeldung':
                include 'Login.php';
                break;

            case 'Registrierung':
                include 'Registration.php';
                break;

            case 'Logout':
                include 'Logout.php';
                break;

            case 'Impressum':
                include 'Impressum.php';
                break;

              
            case 'Kontakt & Hilfe':
                include 'FAQ.php';
                
        }
    
    ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
    </body>
</html>

      