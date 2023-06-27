<?php
    // Session wird gestartet
    session_start();

    // Datenbankverbindung wird einmal included
    require_once('../DB/config.php');

    // Initialisiere Variablen für Fehlermeldungen
    $username_error = '';
    $password_error = '';

    // Include authenticate.php for login logic
    require_once('../DB/authenticate.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
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
                     <!--<li class="nav-item"><a class="nav-link" href="#" style="color: white;">Über uns</a></li>-->
                     <li class="nav-item"><a class="nav-link" href="./FAQ.php" style="color: white;">Kontakt & Hilfe</a></li>
                 </ul>
             </div>
         </div>
         <h2 style="color: white;">OrderNow</h2>
         <div>
             <ul class="navbar-nav">
                 
                
             </ul>
         </div>
     </div>
 </div>
</nav>

 <div class="parent clearfix">
    <div class="bg-illustration"></div>

        <div class="login">
            <div class="container">
                <h1 style="color: #465975"  >Loggen Sie sich ein</h1>
                
                <div class="login-form">
                    <form action="Login.php" method="post" autocomplete="off">
                        <input type="text" name="username" placeholder="Benutzername" id="username" required><br>
                        <!-- wenn der Username falsch ist kommt eine ERROR-Nachricht -->
                        <?php if(!empty($username_error)): ?>
                        <span style="color:#BE0000"><?php echo $username_error; ?></span><br>
                        <?php endif ?>

                        <input type="password" name="password" placeholder="Passwort" id="password" required><br>
                        <!-- wenn das Passwort falsch ist kommt eine ERROR-Nachricht -->
                        <?php if(!empty($password_error)): ?>
                        <span style="color:#BE0000"><?php echo $password_error; ?></span><br>
                        <?php endif ?>
                    
                        <div class="Account">
                            <a href="./Registration.php"><h5><br>Haben Sie noch keinen Account?</h5></a> <!-- Link zur Registrierungsseite -->
                        </div>
                        
                        <button type="submit" name="login" id="login">LOGIN</button>
                    </form>
                </div>
            </div>
        </div>

   




</body>
</html>