<?php
    if(isset($_POST['edit1'])) {
        $id = $_SESSION['id'];
        $vorname = trim($_POST['vorname']);
        $nachname = trim($_POST['nachname']);
        $email = trim($_POST['email']);
        $new_username = trim($_POST['username']);

        $sql = "SELECT * FROM user WHERE UID = ?";
        $stmt = $db_obj->prepare($sql);
        $stmt->bind_param("i", $id);
        $stmt->execute();
        $result = $stmt->get_result();

        if($result) {
            $update = "UPDATE user SET Vorname = ?, Nachname = ?, `E-Mail` = ? WHERE UID = ?";
            $stmt = $db_obj->prepare($update);
            $stmt->bind_param("sssi", $vorname, $nachname, $email, $id);

            if($stmt->execute()) {
                $sql_oldu = "SELECT Username FROM user WHERE UID = ?";
                $stmt = $db_obj->prepare($sql_oldu);
                $stmt->bind_param("i", $id);
                $stmt->execute();
                $stmt->store_result();

                if($stmt->num_rows > 0) {
                    $stmt->bind_result($old_username);
                    $stmt->fetch();

                    if($new_username != $old_username) {
                        $sql_newu = "SELECT * FROM user WHERE Username = ?";
                        $stmt = $db_obj->prepare($sql_newu);
                        $stmt->bind_param("s", $new_username);
                        $stmt->execute();
                        $result_newu = $stmt->get_result();

                        if(mysqli_num_rows($result_newu) == 0) {
                            $update_u = "UPDATE user SET Username = ? WHERE UID = ?";
                            $stmt = $db_obj->prepare($update_u);
                            $stmt->bind_param("si", $new_username, $id);

                            if($stmt->execute()) {
                                $profil_message = "Profil wurde gespeichert.";
                                $_SESSION['name'] = $new_username; // Aktualisierten Benutzernamen in der Session speichern
                            }
                        }
                        elseif(mysqli_num_rows($result_newu) > 0) {
                            $username_error = "Benutzername ist schon vergeben.";
                        }
                    }
                    elseif($new_username == $old_username) {
                        header("Location: Profil.php");
                    }
                }
            }
            else {
                $profil_error = "Profil wurde nicht gespeichert.";
            }
        }
        else {
            $profil_error = "Profil wurde nicht gespeichert.";
        }
    }
?>
