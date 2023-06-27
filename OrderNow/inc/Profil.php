<?php

    session_start();
    require_once('../DB/config.php');
    require_once('../DB/profile_update.php');
    require_once('../DB/address_update.php');
    require_once('../DB/password_update.php');
    $id = $_SESSION['id'];

    $sql = "SELECT Vorname, Nachname, `E-Mail` FROM user WHERE UID = ?"; // SQL-Befehl, der Vorname, Nachname und Email von der Tabelle user auswählt wo die UID = ?
    if($stmt = $db_obj->prepare($sql)) { //SQL-Befehl wird vorbereitet
        $stmt->bind_param("i", $id); // Parameter der Session ID wird angebunden
        $stmt->execute(); // SQL-Befehl wird ausgeführt
        $stmt->bind_result($vorname, $nachname, $email); // Vorname, Nachname und Email werden an Variablen gebunden
        $stmt->fetch();
        $stmt->close();
    }

    $sql_address = "SELECT Straße, PLZ, Stadt, Land FROM Adressen WHERE UID = ?";
    if($address = $db_obj->prepare($sql_address)) {
        $address->bind_param("i", $id);
        $address->execute();
        $address->bind_result($strasse, $postleitzahl, $stadt, $land);
        $address->fetch();
        $address->close();
    }

    $db_obj->close();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../CSS/style.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <title>Profil</title>
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
                    <ul class="navbar-nav">
                        <?php if(isset($_SESSION['loggedin'])) { ?>
                            <a  href="./shoppingcart.html" role="button" target="_self">
                            <a href="./shoppingcart.html" target="_self"><img src="../IMG/cart.jpg" alt="Warenkorb" style="width: 35px; height: 35px;"></a>
                            <a class="btn btn-primary m-1 btn btn-dark" href="./Logout.php" role="button">Logout</a>
                        <?php } ?>
                    </ul>
                </div>
            </div>
        </div>
    </nav>

                     
    <div class="profil custom-section">
    <div class="profil">
        <div class="container">
            <h1 style="color: #465975; text-align: center">Profildaten ändern</h1>
            <div class="register-form">
                <form method="post"  action="Profil.php">
                    <label>Vorname:</label>

                    <input type="text" name="vorname" value="<?php echo $vorname ?>" class="form-control" required><br> <!-- Vorname in der Datenbank wird hier angezeigt -->

                    <label>Nachname:</label>

                    <input type="text" name="nachname" value="<?php echo $nachname ?>" class="form-control" required><br> <!-- Nachname in der Datenbank wird hier angezeigt -->

                    <label>Email:</label>
                            
                    <input type="text" name="email" value="<?php echo $email ?>" class="form-control" required><br> <!-- Email in der Datenbank wird hier angezeigt -->
                    
                    <label>Benutzername:</label>
                    
                    <input type="text" name="username" value="<?php echo $_SESSION['name'] ?>" class="form-control"required><br> <!-- Username in der Datenbank wird hier angezeigt -->
                    
                    <input type="submit" value="Profil speichern" name="edit1"><br>
                    <?php if(isset($profil_message)): ?>
                        <span style="color:blue"><?php echo $profil_message; ?></span>
                    <?php endif ?>
                </form>
            </div>
        </div>
    </div>
    </div>
    <div class="password custom-section">
    <div class="password">
        <h1 style="color: #465975; text-align: center">Passwort ändern</h1>
        <form action="Profil.php" method="post">
            <label>Altes Passwort:</label>
            <input type="text" name="old_password"><br>
            <?php if(isset($old_password_error)): ?> <!-- Fehlermeldung, dass nicht das alte Passwort einegegeben wurde -->
                <span style="color:#BE0000"><?php echo $old_password_error; ?></span><br>
            <?php endif ?>
            <label>Neues Passwort:</label>
            <input type="text" name="new_password1"><br>
            <label>Neues Passwort wiederholen:</label>
            <input type="text" name="new_password2"><br>
            <?php if(isset($new_password_error)): ?> <!-- neues Passwort wurde nicht korrekt wiederholt -->
                <span style="color:#BE0000"><?php echo $new_password_error; ?></span>
            <?php endif ?><br>
            <input type="submit" value="Passwort ändern" name="editpassword"><br>
            <?php if(isset($password_success)): ?>
                <span style="color:blue"><?php echo $password_success; ?></span>
            <?php endif ?>
        </form>
    </div>
    </div>
    <div class="adress custom-section">
    <div class="adress">
        <h1 style="color: #465975; text-align: center">Adresse ändern</h1>
        <form action="Profil.php" method="post">
            <label>Straße:</label>
            <input type="text" name="strasse" value="<?php echo $strasse ?>"><br>
            <label>Postleitzahl:</label>
            <input type="text" name="postleitzahl" pattern="\d+" inputmode="numeric" value="<?php echo $postleitzahl ?>"><br>
            <label>Stadt:</label>
            <input type="text" name="stadt" value="<?php echo $stadt ?>"><br>
            <label>Land:</label>
            <input type="text" name="land" value="<?php echo $land ?>"><br>
            
            <input type="submit" value="Adresse speichern" name="edit2"><br>

            <?php if(isset($adress_error)): ?>
                <span style="color:#BE0000"><?php echo $adress_error; ?></span>
            <?php endif ?><br>
            <?php if(isset($adress_message)): ?>
                <span style="color:blue"><?php echo $adress_message; ?></span>
            <?php endif ?>
        </form>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</body>
</html>