<?php
    session_start();
    $titre = "Profil membre";
    include("start.php");
    include("../modele/notation_moyenne.php");

?>

	<!-- Actualités -->
		<?php include("../vue/profil_membre.php"); ?>

