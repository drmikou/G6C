	<body>
		<div id="bloc_page">                
			<section>

				<?php
					if (empty($_POST['pseudo'])) // Si on la variable est vide, on peut considérer qu'on est sur la page de formulaire
					{

						include("../vue/inscription_form.php");
					}
				

				// Déclaration des variables 
					$pseudo_erreur1 = NULL;
					$pseudo_erreur2 = NULL;
					$mdp_erreur = NULL;
					$email_erreur1 = NULL;
                    $email_erreur2 = NULL;
                    $birth_erreur = NULL ;
                    $street_erreur = NULL ; 
                    $town_erreur = NULL ;
                    $surname_erreur = NULL ;
                    $name_erreur = NULL ;


                    // Récupération des variables

                    if(isset($_POST['valider']))
                    {
						$i = 0;
						$temps = time();

							if(isset($_POST['pseudo']))
							{
								$pseudo = $_POST['pseudo'];
							}

                            if (isset($_POST['password']))
                            {
								$password = $_POST['password'];
							}

                            if (isset($_POST['email']))
                            {
								$email = $_POST['email'] ;
							}

							if (isset($_POST['confirm']))
							{
								$confirm = $_POST['confirm'];
							}

							if (isset($_POST['street']))
							{
								$street = $_POST['street'];
							}
							
							if (isset($_POST['town']))
							{
								$town = $_POST['town'] ;
							}

							if (isset($_POST['sup']))
							{
								$sup = $_POST['sup'];
							}

							if (isset($_POST['name']))
							{
								$name = $_POST['name'] ;
							}

							if (isset($_POST['surname']))
							{
								$surname = $_POST['surname'];
							}

							if (isset($_POST['birth']))
							{
								$birth = $_POST['birth'];
							}

							if(isset($_POST['phone']))
							{
								$phone = $_POST['phone'];
							}
							
						$dep = $_POST['dep'];



						include("../modele/inscription_verification.php");

						//Vérification du pseudo
							if(!$pseudo_free)
    						{
        						$pseudo_erreur1 = "Votre pseudo est déjà utilisé par un membre";
        						$i++;
    						}

    						if (strlen($pseudo) < 3 || strlen($pseudo) > 15)
    						{
        						$pseudo_erreur2 = "Votre pseudo ne correspond pas au format demandé";
        						$i++;
    						}

    					//Vérification du mdp
						    if ($_POST['password'] != $_POST['confirm'] || empty($_POST['confirm']) || empty($_POST['password']))
						    {
						        $mdp_erreur = "Votre mot de passe et votre confirmation de mot de passe ne correspondent pas ou ne sont pas remplis";
						        $i++;
						    }
						    
						    if (empty($_POST['name']))
						    {
						    	$name_erreur = 'Les champs suivants doivent être obligatoirement remplis :
						    	<br/><br/>Votre nom';
						    	$i++;
						    }

						    if (empty($_POST['surname']))
						    {
						    	$surname_erreur = "Erreur. Les champs suivants doivent être obligatoirement remplis :
						    	<br/><br/>Votre prénom<br/>";
						    	$i++;
						    }

						    if (empty($_POST['birth']))
						    { 
						        $birth_erreur = 'Erreur. Les champs suivants doivent être obligatoirement remplis :
						    	Votre date de naissance';
						    	$i++;
						    }

						    if (empty($_POST['street']))
						    {
						    	$street_erreur = "Erreur. Les champs suivants doivent être obligatoirement remplis :
						    	<br/><br/>Votre rue<br/>";
						    	$i++;
						    }

						    if (empty($_POST['town']))
						    {
						       $town_erreur = 'Erreur. Les champs suivants doivent être obligatoirement remplis :
						    	<br/><br/>Votre ville<br/>';
						   		$i++;
						    }	


						//Vérification de l'email
						    include("../modele/inscription_verification_mail.php");

						    if(!$mail_free)
							{
								$email_erreur1 = 'Votre adresse email est déjà utilisée par un membre';
								$i++;
    						}




    					if ($i==0)
   						{
							echo '<h1>Inscription terminée</h1>';
							echo '<p>Bienvenue '.stripslashes(htmlspecialchars($_POST['pseudo'])).' vous êtes maintenant inscrit sur le site VegATable !</p>
							<p>Cliquez <a href="../controleur/index.php">ici</a> pour retourner sur la page d\'accueil.</p>';	

							include("../modele/inscription_envoi.php");
							include("../modele/inscription_envoi_mail.php");
							include("../modele/inscription_envoi_message.php");

						}
       					else
       					{
				            echo'<h1>Inscription interrompue</h1>';
				            echo'<p>Une ou plusieurs erreurs se sont produites pendant l incription</p>';
				            echo'<p>'.$i.' erreur(s)</p>';
				            echo'<p>'.$pseudo_erreur1.'</p>';
				            echo'<p>'.$pseudo_erreur2.'</p>';
				            echo'<p>'.$mdp_erreur.'</p>';
				            echo'<p>'.$email_erreur1.'</p>';
				            echo'<p>'.$street_erreur.'</p>';
				            echo'<p>'.$birth_erreur.'</p>';
				            echo'<p>'.$town_erreur.'</p>';
				            echo'<p>'.$name_erreur.'</p>';
				            echo'<p>Cliquez <a href="./inscription.php">ici</a> pour recommencer</p>';
       					}	
    				}

                ?>

			</section>
		</div>		




	</body>	


		<!-- Footer-->
		<?php include("../vue/footer.php"); ?>	
		

</html>
