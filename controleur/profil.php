<?php
    session_start();
    $titre = "Mon profil";
    include("start.php");
    include("../modele/database_message.php");

    if(isset($id))
    {
        include("../modele/profil_information.php");
    }

?>

	<!-- Profil -->
		<?php include("../vue/profil.php"); ?>

