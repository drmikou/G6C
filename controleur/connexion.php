<!-- CONSTANTES ET VARIABLES -->
<?php
	$message = '';      // Message à afficher à l'utilisateur
?>




<!-- Formulaire de connexion -->
	<?php include("../vue/connexion_form.php"); ?>




<!-- Traitement -->	

<?php
		if(!empty($_POST))	// Si le tableau $_POST existe alors le formulaire a été envoyé
		{
			if(empty($_POST['login']))										// Le LOGIN est-il rempli ?
			{
				$message = 'Veuillez indiquer votre login svp !';			// Non
			}
			elseif(empty($_POST['password']))								// Le MOT DE PASSE est-il rempli?
			{
				$message = 'Veuillez indiquer votre mot de passe svp !';	// Non
			}
			else
			{	
				include("../modele/connexion.php");

				if($_POST['password'] == $data['user_password'])			// Le MOT DE PASSE est-il correct? / md5: permet de chiffrer une chaîne de caractère en un entier hexadécimal de 32 caractères.
				{
					$message = 'Bienvenue '. $data['user_login'] .' ! Vous êtes maintenant connecté sur notre communauté!';			// Identification réussit
					$_SESSION['pseudo'] = $data['user_login'];
	    			$_SESSION['id'] = $data['user_id'];
	    			$_SESSION['admin'] = $data['user_admin'];
	    			/*header('Location: home.php');*/
	    			echo "<script type='text/javascript'>document.location.replace('../controleur/index.php');</script>";

	    			if( $data['user_admin'] == 1)
	    			{
	    				echo( 'Bonjour administrateur!!');
	    			}
				}
				else
				{
					$message = 'Un erreur est survenue! Veuillez réessayer svp.';				// Non
				}
			}
		}
?>

<!-- Réponse -->

<?php
	if(!empty($message)) :
?>
		<p><?php echo $message; ?></p>
<?php
		
	endif;
?>