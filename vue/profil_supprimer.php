
	<body>

		<div id="bloc_page">

		<?php
			if (isset($pseudo)) // Si on la variable est non vide, on considére qu'on est sur la page pour supprimer le profil
			{		
		?>
		        

		        	<?php include("../vue/profil_supprimer_form.php"); ?>

		        

        <?php
			}

			if (isset($_POST['mdp_actuel'])  && isset($pseudo) )
			{
				include("../modele/profil_supprimer_check.php");

				if($data['user_password'] == $mdp_actuel)
				{
					include("../modele/profil_supprimer.php");
					echo "Votre compte a bien été supprimé!";
				
					session_unset ();
					session_destroy();

					$titre="Déconnexion";

					if ($id==0) erreur(ERR_IS_NOT_CO);

					echo '<p>Cliquez <a href="../controleur/index.php">ici</a> pour retourner sur la page d\'accueil.</p>';
				
				}
				elseif($data['user_password'] != $mdp_actuel)
				{
					echo "Votre mot de passe est faux!";
				}
			}
		?>



		</div>

    </body>

</html>