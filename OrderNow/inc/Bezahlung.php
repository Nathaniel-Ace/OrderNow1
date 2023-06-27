<?php
  session_start();
?>

<!DOCTYPE html>
<html>
<head>
  <title>Zahlungsseite</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <link rel="stylesheet" href="../CSS/style.css">

  <script>
    function openInfoWindow(paymentMethod) {
      var width = 400;
      var height = 400;
      var left = (window.innerWidth / 2) - (width / 2);
      var top = (window.innerHeight / 2) - (height / 2);
      var windowFeatures = 'width=' + width + ',height=' + height + ',left=' + left + ',top=' + top;

      if (paymentMethod === 'paypal') {
        window.open('paypal_info.html', 'Info', windowFeatures);
      } else if (paymentMethod === 'card') {
        var paymentWindow = window.open('depit_info.php', 'Info', windowFeatures);

        window.addEventListener('unload', function() {
          document.getElementById('paymentForm').submit();
        });
      }
    }
  </script>
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
                        <li class="nav-item"><a class="nav-link active" aria-current="page" href="../Index.php" style="color: white;">Home</a></li>
                        <li class="nav-item"><a class="nav-link" href="Shop.php" style="color: white;">Shop</a></li>
                        <!--<li class="nav-item"><a class="nav-link" href="#" style="color: white;">Über uns</a></li>-->
                        <li class="nav-item"><a class="nav-link" href="FAQ.php" style="color: white;">Kontakt & Hilfe</a></li>
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
                    <a  href="./shoppingcart.html" role="button" target="_self">
                    <div style="display: inline-block;">
                    <a href="./shoppingcart.html" target="_self"><img src="../IMG/cart.jpg" alt="Warenkorb" style="width: 35px; height: 35px;"></a>
                    <a class="btn btn-primary m-1 btn btn-dark" href="./Login.php" role="button" target="_self">Anmeldung</a>
                    <a class="btn btn-primary m-1 btn btn-dark" href="./Registration.php" role="button" target="_self">Registrierung</a>
                    </div>

                    
                  <?php } ?>
                </ul>
            </div>
        </div>
    </div>
</nav>
<section class="cart-section" style="margin-top: 100px"> 
<div class="container">
<h3 style="margin-top: 30px; margin-bottom: 40px; color: #465975; text-align: center;">Einkaufsliste</h3>
 
<ul id="cart-products"></ul>
  <p id="cart-price"></p>
  
  <form id="paymentForm" method="post" action="Bezahlung.php">
    <h3 style="color: #465975; margin-top: 50px; ">Zahlungsart wählen</h3>
    <div class="payment-options">
      <button type="button" onclick="openInfoWindow('paypal')">PayPal</button>
      <button type="button" onclick="openInfoWindow('card')">Debit/Kreditkarte</button>
    </div>
    <br>
    <input id="delete-button" class="styled-button" type="submit" value="Bezahlen" onclick="navigateToIndex()">
  </form>
</div>

<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  echo "<h3>Danke für Ihren Einkauf!</h3>";
  header("refresh:5;url=../Index.php");
}
?>
</section>
<script src="../JS/shoppingcart.js"></script>
<script src="../JS/producthandler.js"></script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</body>
</html>
