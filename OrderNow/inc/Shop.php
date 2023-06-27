<?php
  session_start();
?>

<!DOCTYPE html>
<html>
<head>
  <title>Online Store</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <link rel="stylesheet" href="../CSS/products.css">
  
 
</head>
<body>
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
                        <li class="nav-item"><a class="nav-link active" aria-current="page" href="../Index.php" style="color: white;">Home</a></li>
                        
                        <li class="nav-item"><a class="nav-link" href="../inc/FAQ.php" style="color: white;">Kontakt & Hilfe</a></li>
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


    <h1 id="#onlinestore" style="color: #465975; margin-top: 50px; font-weight:bold">Welcome to our Online Store</h1>


    <div id="filters">
        <h2>Filters</h2>
        <label>
          <input type="checkbox" id="white-checkbox">
          White
        </label>
        <label>
          <input type="checkbox" id="black-checkbox">
          Black
        </label>
        <label>
          <input type="checkbox" id="red-checkbox">
          Red
        </label>
        <label>
          <input type="checkbox" id="wooden-checkbox">
          Wooden
        </label>
        <label>
          <input type="checkbox" id="grey-checkbox">
          Grey
        </label>
        <label>
          &nbsp; 
          Minimum Price:
          <input type="text" id="min-price">
        </label>
        <label>
        &nbsp; 
          Maximum Price:
          <input type="text" id="max-price">
        </label>
        <button id="filter-btn">Filter</button>
      </div>
      <br>
    
<input type="text" id="search-input" placeholder="Search products">
<button id="search-btn">Search</button>


    <div class="products-container">
      <div class="product">
        <div class="product-image">
          <img src="../IMG/couch.jpg" alt="Product 1">
        </div>
        <h2>Graues Sofa</h2>
      
        <p class="product-price">$499.99</p> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <button class="add-to-cart-btn" data-product="Graues Sofa" data-price="499.99">Add to Cart</button>
      </div>
      
      <div class="product">
        <div class="product-image">
          <img src="../IMG/gartentisch.jpg" alt="Product 2">
        </div>
        <h2>Weißer Gartentisch</h2>
        
        <p class="product-price">$99.99</p> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <button class="add-to-cart-btn" data-product="Weißer Gartentisch" data-price="99.99">Add to Cart</button>

      </div>
    
      <div class="product">
        <div class="product-image">
          <img src="../IMG/kaffeetisch.webp" alt="Product 3">
        </div>
        <h2>Schwarzer Kaffeetisch</h2>
        
        <p class="product-price">$79.99</p> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <button class="add-to-cart-btn" data-product="Schwarzer Kaffeetisch" data-price="79.99">Add to Cart</button>
      </div>

        <div class="product">
          <div class="product-image">
            <img src="../IMG/Garten6sitzer.jpg" alt="Product 4">
          </div>
          <h2>Gartenmöbel Set Grau</h2>
          
          <p class="product-price">$899.99</p> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
          <button class="add-to-cart-btn" data-product="Gartenmöbel Set Grau" data-price="899.99">Add to Cart</button>

        </div>
      
        <div class="product">
          <div class="product-image">
            <img src="../IMG/Schreibtsich.webp" alt="Product 5">
          </div>
          <h2>Weißer Schreibtisch</h2>
          
          <p class="product-price">$99.99</p> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
          <button class="add-to-cart-btn" data-product="Weißer Schreibtisch" data-price="99.99">Add to Cart</button>
        </div>
      
        <div class="product">
          <div class="product-image">
            <img src="../IMG/Bett.webp" alt="Product 6">
          </div>
          <h2>Weißes Doppelbett</h2>
          
          <p class="product-price">$229.99</p> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
          <button class="add-to-cart-btn" data-product="Weißes Doppelbett" data-price="229.99">Add to Cart</button>

        </div>

        <div class="product">
            <div class="product-image">
              <img src="../IMG/regal.jpg" alt="Product 7">
            </div>
            <h2>Weißes Regal</h2>
            
            <p class="product-price">$49.99</p> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <button class="add-to-cart-btn" data-product="Weißes Regal" data-price="49.99">Add to Cart</button>

          </div>
        
          <div class="product">
            <div class="product-image">
              <img src="../IMG/kronleuchter.jpg" alt="Product 8">
            </div>
            <h2>Edler Kronleuchter Weiß</h2>
            
            <p class="product-price">$149.99</p> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <button class="add-to-cart-btn" data-product="Edler Kronleuchter Weiß" data-price="149.99">Add to Cart</button>

          </div>
        
          <div class="product">
            <div class="product-image">
              <img src="../IMG/kommode.jpg" alt="Product 9">
            </div>
            <h2>Weiße Kommode</h2>
            
            <p class="product-price">$49.99</p> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <button class="add-to-cart-btn" data-product="Weiße Kommode" data-price="49.99">Add to Cart</button>

          </div>

          <div class="product">
            <div class="product-image">
              <img src="../IMG/redsofa.jpg" alt="Product 10">
            </div>
            <h2>Rotes Sofa</h2>
            
            <p class="product-price">$299.99</p> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <button class="add-to-cart-btn" data-product="Rotes Sofa" data-price="299.99">Add to Cart</button>

          </div>

          <div class="product">
            <div class="product-image">
              <img src="../IMG/holzkaffeetisch.jpg" alt="Product 11">
            </div>
            <h2>Holzerner Kaffeetisch</h2>
            
            <p class="product-price">$89.99</p> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <button class="add-to-cart-btn" data-product="Holzerner Kaffeetisch" data-price="89.99">Add to Cart</button>

          </div>

          <div class="product">
            <div class="product-image">
              <img src="../IMG/schwarzerschreibtisch.jpg" alt="Product 12">
            </div>
            <h2>Schwarzer Schreibtisch</h2>
            
            <p class="product-price">$99.99</p> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <button class="add-to-cart-btn" data-product="Schwarzer Schreibtisch" data-price="99.99">Add to Cart</button>

          </div>

          <div class="product">
            <div class="product-image">
              <img src="../IMG/schwarzesregal.jpg" alt="Product 13">
            </div>
            <h2>Schwarzes Regal</h2>
            
            <p class="product-price">$49.99</p> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <button class="add-to-cart-btn" data-product="Schwarzes Regal" data-price="49.99">Add to Cart</button>

          </div>

          <div class="product">
            <div class="product-image">
              <img src="../IMG/Holzregal.jpg" alt="Product 14">
            </div>
            <h2>Holzregal</h2>
            
            <p class="product-price">$59.99</p> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <button class="add-to-cart-btn" data-product="Holzregal" data-price="59.99">Add to Cart</button>

          </div>

          <div class="product">
            <div class="product-image">
              <img src="../IMG/Einzelbett.jpg" alt="Product 15">
            </div>
            <h2>Einzelbett</h2>
            
            <p class="product-price">$129.99</p> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <button class="add-to-cart-btn" data-product="Einzelbett" data-price="129.99">Add to Cart</button>

          </div>
    
    </div>
    <br>
    <br>
    <form action="Bezahlung.php">
      <input id="delete-button" class="styled-button" type="submit" value="Bezahlen">
    </form>


    <script src="../JS/productfilter.js"></script>
    <script src="../JS/producthandler.js"></script>
  </body>
  </html>