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
    <title>OrderNow - Kontakt & Hilfe</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
    <link rel="stylesheet" href="../CSS/style.css">

</head>

<body>
<nav class="navbar navbar-expand navbar-light navbar sticky-top" style="background-color: #60abc9;">
 <div class="container-fluid">
     <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
     <span class="navbar-toggler-icon"></span>
     </button>
     <div class="d-flex justify-content-between w-100">
         <div>
             <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                 <ul class="navbar-nav">
                     <li class="nav-item"><a class="nav-link" href="../Index.php" style="color: white;">Home</a></li>
                     <li class="nav-item"><a class="nav-link" href="./Shop.php" style="color: white;">Shop</a></li>
                     
                 </ul>
             </div>
         </div>
         <h2 style="color: white;">OrderNow</h2>
        <div>
        <ul class="navbar-nav">
            <?php if(isset($_SESSION['loggedin'])) { ?>
              <a  href="./shoppingcart.html" role="button" target="_self">
              <a href="./shoppingcart.html" target="_self"><img src="../IMG/cart.jpg" alt="Warenkorb" style="width: 35px; height: 35px;"></a>
              <a href="./Profil.php" class="nav-link"><u><?php echo $_SESSION['name'] ?></u></a>
              <a class="btn btn-primary m-1 btn btn-dark" href="./Logout.php" role="button">Logout</a>
            <?php } else { ?>
              <a class="btn btn-primary m-1 btn btn-dark" href="./Login.php" role="button" target="_self">Anmeldung</a>
              <a class="btn btn-primary m-1 btn btn-dark" href="./Registration.php" role="button" target="_self">Registrierung</a>
            <?php } ?>
          </ul>
        </div>
     </div>
 </div>
</nav>

<section class="main-content">
    <div class="container">
      <h1 class="text-center mb-1 mt-5" style="color: #465975">Häufig gestellte Fragen</h1>
      <br>
      <br>
      <div class="row flex-center">
        <div class="col-sm-10 offset-sm-1">
          <div class="accordion" id="accordionExample">
 
          <div class="accordion-item">
              <h2 class="accordion-header" id="headingOne">
                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                <div class="circle-icon"> <i class="fa fa-question"></i> </div>
                <span>Wie lange dauert es bis meine Bestellung ankommt?</span> </button>
              </h2>
              <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                <div class="accordion-body">Sofort verfügbare Artikel liefern wir in der Regel innerhalb von 2-3 Werktagen.</div>
              </div>
            </div>

            <div class="accordion-item">
              <h2 class="accordion-header" id="headingTwo">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                  <div class="circle-icon"> <i class="fa fa-question"></i> </div>
                <span>Wie kann ich meine Bestellung nachverfolgen?</span> </button>
                  </button>
              </h2>
              <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                <div class="accordion-body">Um den Lieferstatus Deiner Bestellung zu prüfen, ruf die Versandbestätigung auf, welche Du per E-Mail erhalten hast. Für jedes Paket, was an Dich versendet wird, erhältst Du eine Versandbestätigung inkl. Link zur Sendungsverfolgung.
                <br>So weißt Du stets, wo Deine Sendung gerade ist und wie lang die Sendung noch zu Dir braucht.</div>
              </div>
            </div>

            <div class="accordion-item">
              <h2 class="accordion-header" id="headingThree">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree"> 
                  <div class="circle-icon"> <i class="fa fa-question"></i> </div>
                <span>Wie lange dauert es in der Regel, bis mir meine Retoure gutgeschrieben wird?</span></button>
                  </button>
              </h2>
              <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                <div class="accordion-body">Sobald die Rücksendung bei uns eingetroffen ist und geprüft wurde, erfolgt die Gutschrift des Rechnungsbetrags innerhalb von 14 Tagen über den von Dir bei der Bestellung gewählten Zahlungsweg.</div>
              </div>
            </div>

            <div class="accordion-item">
              <h2 class="accordion-header" id="headingFour">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour"> 
                  <div class="circle-icon"> <i class="fa fa-question"></i> </div>
                <span>Ist es möglich, die Lieferung zu einem Wunschtermin zu erhalten?</span></button>
                  </button>
              </h2>
              <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour" data-bs-parent="#accordionExample">
                <div class="accordion-body">Leider ist es aus logistischen Gründen nicht möglich, Ihre Bestellung zu einem von Ihnen gewählten Termin zu versenden. Alle Bestellungen werden in der Reihenfolge, in der sie bei uns eingegangen sind, bearbeitet.</div>
              </div>
            </div>


            <div class="accordion-item">
              <h2 class="accordion-header" id="headingFive">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive"> 
                  <div class="circle-icon"> <i class="fa fa-question"></i> </div>
                <span>Wie hoch sind die Versandkosten?</span></button>
                  </button>
              </h2>
              <div id="collapseFive" class="accordion-collapse collapse" aria-labelledby="headingFive" data-bs-parent="#accordionExample">
                <div class="accordion-body">Der Standardversand innerhalb Österreichs kostet bei uns 4,87 €. Ab 15 € Bestellwert ist der Versand innerhalb Österreichs für Sie kostenfrei.</div>
              </div>
            </div>

            <div class="accordion-item">
              <h2 class="accordion-header" id="headingSix">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSix" aria-expanded="false" aria-controls="collapseSix"> 
                  <div class="circle-icon"> <i class="fa fa-question"></i> </div>
                <span>Kann ich einen Artikel umtauschen?</span></button>
                  </button>
              </h2>
              <div id="collapseSix" class="accordion-collapse collapse" aria-labelledby="headingSix" data-bs-parent="#accordionExample">
                <div class="accordion-body">Ein direkter Umtausch von Artikeln ist leider nicht möglich. Bitte senden Sie den nicht gewünschten Artikel zurück und geben Sie eine neue Bestellung auf.</div>
              </div>
            </div>
          

          </div>
        </div>
      </div>
    </div>
  </section>


  <section class="contact-section py-5 mt-2">
  <div class="containerfaq">
    <h1 class="text-center mb-5 mt-2" style="color: #465975">Kundenservice</h1>
    <div class="row justify-content-around text-center">
      <div class="col-12 col-lg-3 bg-light p-5 mx-2">
        <h5><strong>Keine hilfreiche Antwort gefunden?</strong></h5>
        <p>Finde deine Antwort in nur wenigen Klicks oder kontaktiere uns für weiteren Support.</p>
      </div>
      <div class="col-12 col-lg-3 bg-light p-5 mx-2">
        <h5><strong>Hilfe erhalten</strong></h5>
        <p>Besuche unser Self-Service-Center, um schnell Antworten auf die am häufigsten gestellten Fragen zu erhalten oder uns zu schreiben.</p>
      </div>
      <div class="col-12 col-lg-3 bg-light p-5 mx-2">
        <h5><strong>Ruf uns an</strong></h5>
        <p>01 / 123 456 78</p>
        <p>Kostenlose Hotline: Mo - Fr 08 - 20, Sa & Feiertage 09 - 18</p>
      </div>
    </div>
  </div>
</section>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script> 

</body>
</html>