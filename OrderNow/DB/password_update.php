<?php
    if(isset($_POST['editpassword'])) {
        $id = $_SESSION['id'];
        $old_password = $_POST['old_password'];
        $new_password1 = $_POST['new_password1'];
        $new_password2 = $_POST['new_password2'];

        $sql_old = "SELECT Passwort FROM user WHERE `UID` = ?";  //SQL-Befehl wird vorbereitet

        if($stmt = $db_obj->prepare($sql_old)) {
            $stmt->bind_param("i", $id);
            $stmt->execute();                   // SQL-Befehl wird mit Parametern gebunden, ausgeführt und das Passwort in der Tabelle user wird gespeichert
            $stmt->store_result();

            if($stmt->num_rows > 0) { // Reihe mit den gesuchten Passwort wurde gefunden
                $stmt->bind_result($hashed_oldpassword); // das gehashte Passwort wird an die Variable gebunden
                $stmt->fetch();

                if(password_verify($old_password, $hashed_oldpassword)) { // das alte Passwort wird entschlüsselt 
                    if($new_password1 != $new_password2) { // wenn das neue Passwort nicht mit dem neuen wiederholten Passwort übereinstimmmt wird eine Fehlermeldung formuliert
                        $new_password_error = "Passwörter stimmmen nicht überein.";
                    }
                    else { // neue Passwörter stimmen überein und das alte Passwort wird mit dem neuen ersetzt
                        $update = "UPDATE user SET Passwort = ? WHERE `UID` = ?";

                        if($upstmt = $db_obj->prepare($update)) {
                            $upstmt->bind_param("si", $hashed_newpassword, $id); 
                            $hashed_newpassword = password_hash($new_password1, PASSWORD_DEFAULT); // neues Passwort wird gehasht

                            if($upstmt->execute()) {
                                $password_success = "Passwort erfolgreich geändert.";
                            }
                            else {
                                echo "Ups! Etwas ist schiefgelaufen. Bitte versuchen Sie es erneut.";
                            }
                        }
                    }
                }
                else { // eingebenes Passwort stimmt nicht mit dem alten Passwort überein und Fehlermeldun wird formuliert
                    $old_password_error = "Bitte geben Sie ihr altes Passwort ein.";
                }
            }
        }
    }
?>