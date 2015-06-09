<?php
    session_start();
    $titre = "S'inscrire";
    include("start.php");

    if ($id!=0)
    {
        erreur(ERR_IS_CO);
    }


?>


	<!-- S'inscrire -->
		<?php include("../vue/inscription.php"); ?>

