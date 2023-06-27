<?php
    session_start();
    require_once('../DB/config.php');
    require_once('../DB/insert_into_db.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../CSS/style.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <title>Registrieren</title>
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
             <h2 class="navbar-title" style="color: white;">OrderNow</h2>
         <div>
            
         </div>
     </div>
 </div>
</nav>

    <div class="register">
        <div class="container">
            <h1>Registrierung</h1>
            <div class="register-form">
                <form action="Registration.php" method="post" autocomplete="off">
                    
                    <input type="text" name="vorname" id="vorname" placeholder="Vorname" value="<?php echo $vname; ?>" required><br>
                    
                    <input type="text" name="nachname" id="nachname" placeholder="Nachname" value="<?php echo $nname; ?>" required><br>

                    <input type="text" name="username" id="username" placeholder="Benutzername" required><br>
                    <!-- wenn der Username schon vergeben ist kommt eine ERROR-Nachricht -->
                    <?php if(isset($username_error)): ?>
                    <span style="color:#BE0000"><?php echo $username_error; ?></span><br>
                    <?php endif ?>
                  
                    <input type="email" name="email" id="email" placeholder="E-Mail Adresse" value="<?php echo $email; ?>" required><br>

                    <input type="password" name="password1" id="password1" placeholder="Passwort" required><br>

                    <!-- wenn die Passwörter nicht überein stimmen kommt eine ERROR-Nachricht -->
                    <input type="password" name="password2" id="password2" placeholder="Passwort wiederholen" required><br>
                    <?php if(isset($password_error)): ?>
                        <span style="color:#BE0000"><?php echo $password_error; ?></span><br>
                    <?php endif ?>

                    <div class="Account">
                        <a href="./Login.php"><h5><br>Haben Sie schon einen Account?</h5></a>
                    </div>

                    <button type="submit" name="register">Registrieren</button>
                </form>
            </div>
        </div>
    </div>


    
</body>
</html>