<?php
    session_start();
    $titre = "Changer mes informations";
    include("start.php");

    if(isset($id))
    {
        include("../modele/profil_information.php");
    }
?>

	<!-- Connexion-->
		<?php include("../vue/changer_informations.php"); ?>

