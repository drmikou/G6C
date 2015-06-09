<?php
    session_start();
    session_destroy();
    include("start.php");
    $titre="Déconnexion";
?>

<!-- Déconnexion-->
	<?php include("../vue/deconnexion.php"); ?>
