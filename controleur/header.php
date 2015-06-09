<!-- Header  GENERAL -->

<header>

	<?php include("header_bandeau.php"); ?>


    <!-- Affichage pour le visiteur -->
    <?php
        if($id==0)
        {
        	include("../vue/header_visiteur.php");
        }
 

    // Affichage pour un utilisateur

        elseif($admin==0)
        {
        	include("../vue/header_utilisateur.php");
        }

    // Affichage pour un admin
        else
        {
        	include("../vue/header_admin.php");
        }
    ?>    	


	</div>
</header>