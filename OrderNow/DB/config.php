<?php

    $host = "localhost";
    $user = "OrderNow";
    $passwordDB = "OrderNow04!";                    //Datenbankverbindung mit zugehörigen Account für Datenbank
    $database = "ordernow";

    $db_obj = new mysqli($host, $user, $passwordDB, $database);

    if($db_obj === false) {
        die("ERROR: Keine Verbindung" . $db_obj->connect_error);
    }
    
?>