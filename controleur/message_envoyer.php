<?php
    session_start();
    $titre = "Envoyer un message";
    include("start.php");
    include("../modele/database_message.php");

?>

	<!-- Envoyer un message -->
		<?php include("../vue/message_envoyer.php"); ?>

