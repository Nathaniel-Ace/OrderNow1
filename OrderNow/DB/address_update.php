<?php

    // Initialisiere Variablen für Fehlermeldungen
    $strasse = '';
    $postleitzahl = '';
    $stadt = '';
    $land = '';

    if(isset($_POST['edit2'])) {
        $id = $_SESSION['id'];
        $strasse = trim($_POST['strasse']);
        $postleitzahl = trim($_POST['postleitzahl']);
        $stadt = trim($_POST['stadt']);
        $land = trim($_POST['land']);

        $sql = "SELECT * FROM adressen WHERE `UID` = ?";
        $stmt = $db_obj->prepare($sql);
        $stmt->bind_param("i", $id);
        $stmt->execute();
        $result = $stmt->get_result();

        if($result) {
            if($result->num_rows > 0) {
                // Profil vorhanden, daher aktualisieren
                $update = "UPDATE adressen SET Straße = ?, PLZ = ?, Stadt = ?, Land = ? WHERE `UID` = ?";
                $stmt = $db_obj->prepare($update);
                $stmt->bind_param("ssssi", $strasse, $postleitzahl, $stadt, $land, $id);

                if($stmt->execute()) {
                    $adress_message = "Adresse wurde gespeichert.";
                } else {
                    $adress_error = "Adresse wurde nicht gespeichert.";
                }
            } else {
                // Profil nicht vorhanden, daher neu erstellen
                $insert = "INSERT INTO adressen (`UID`, Straße, PLZ, Stadt, Land) VALUES (?, ?, ?, ?, ?)";
                $stmt = $db_obj->prepare($insert);
                $stmt->bind_param("issss", $id, $strasse, $postleitzahl, $stadt, $land);

                if($stmt->execute()) {
                    $adress_message = "Adresse wurde gespeichert.";
                } else {
                    $adress_error = "Adresse wurde nicht gespeichert.";
                }
            }
        } else {
            $adress_error = "Adresse wurde nicht gespeichert.";
        }
    }
?>
