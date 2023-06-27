<?php
   session_start(); // Session wird gestartet
   session_destroy(); // Session wird zerstört und User wird ausgeloggt
   header('Refresh: 1; URL = /OrderNow/Index.php'); // User wird zurück zur Startseite gebracht
?>

<div class="container">
   <h2>Sie werden jetzt ausgeloggt!</h2>
</div>