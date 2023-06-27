<?php
  // Session wird gestartet
  session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Impressum</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="../CSS/style.css">
</head>

<body style="background: ;">
<nav class="navbar navbar-expand navbar-light navbar sticky-top" style="background-color: #60abc9;">
        <div class="container-fluid">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="d-flex justify-content-between w-100">
                <div>
             <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                 <ul class="navbar-nav">
                     <li class="nav-item"><a class="nav-link active" aria-current="page" href="../Index.php" style="color: white;">Home</a></li>
                     <li class="nav-item"><a class="nav-link" href="Shop.php" style="color: white;">Shop</a></li>
                     <!--<li class="nav-item"><a class="nav-link" href="#" style="color: white;">Über uns</a></li>-->
                     <li class="nav-item"><a class="nav-link" href="FAQ.php" style="color: white;">Kontakt & Hilfe</a></li>
                 </ul>
             </div>
         </div>
         <h2 class="navbar-title" style="color: white;">OrderNow</h2>
         <div>
            <ul class="navbar-nav">
                    <?php if(isset($_SESSION['loggedin'])) { ?>
                        <a  href="./shoppingcart.html" role="button" target="_self">
                        <a href="./shoppingcart.html" target="_self"><img src="../IMG/cart.jpg" alt="Warenkorb" style="width: 35px; height: 35px;"></a>
                        <a href="./inc/Profil.php" class="nav-link"><u><?php echo $_SESSION['name'] ?></u></a>
                        <a class="btn btn-primary m-1 btn btn-dark" href="./inc/Logout.php" role="button">Logout</a>
                    <?php } else { ?>
                        <a href="./shoppingcart.html" role="button" target="_self">
                            <div style="display: inline-block;">
                                <a href="./shoppingcart.html" target="_self"><img src="../IMG/cart.jpg" alt="Warenkorb" style="width: 35px; height: 35px;"></a>
                                <a class="btn btn-primary m-1 btn btn-dark" href="./inc/Login.php" role="button" target="_self">Anmeldung</a>
                                <a class="btn btn-primary m-1 btn btn-dark" href="./inc/Registration.php" role="button" target="_self">Registrierung</a>
                            </div>
                        </a>
                    <?php } ?>
                </ul>
            </div>
     </div>
 </div>
</nav>

<div class="container my-5">
    <div class="imprint-section mx-auto py-5 px-3 text-center d-flex justify-content-center align-items-center">
        <div>
            <h1 class="mb-5" style="color: #465975">Impressum</h1>
           
                <div class="mb-4">
                    <h4 class="mb-1">Firma</h4>
                    <p>OrderNow</p>
                </div>
                <div class="mb-4">
                    <h4 class="mb-1">UID Nummer</h4>
                    <p>ATU1234</p>
                </div>
                <div class="mb-4">
                    <h4 class="mb-2">Firmenbuchnummer</h4>
                    <p>123123</p>
                </div>
                <div class="mb-4">
                    <h4 class="mb-2">Unternehmensregister</h4>
                    <p>Universität: Vienna</p>
                </div>
                <div class="mb-4">
                    <h4 class="mb-2">Firmensitz</h4>
                    <p>1200 Vienna</p>
                </div>
                <div class="mb-4">
                    <h4 class="mb-2">Adresse</h4>
                    <p>Hoechstaedtplatz 6 | Vienna | Austria</p>
                </div>
                <div class="mb-4">
                    <h4 class="mb-2">Telefonnummer</h4>
                    <p><a class="tel" href="tel:+43 1234567890">+43 1234567890</a></p>
                </div>
                <div class="mb-4">
                    <h4 class="mb-2">E-Mail Adresse</h4>
                    <p><a class="mail" href="mailto:contact@OrderNow.at">contact@orderNow.at</a></p>
                </div>
            </div>
        </div>
    </div>
</div>

</body>
</html>

    