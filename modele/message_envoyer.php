	<?php

		if (isset($_POST['destinataire']) && isset($_POST['contenu']))
		{
			
			$destination= $_POST['destinataire'];
			$contenu= $_POST['contenu'];

			$reponse= $db->query('SELECT user_login FROM user');

			while($data= $reponse->fetch())
			{

				if($data['user_login']== $destination)
				{
					$query=$db->prepare('INSERT INTO message (message_sender, message_destination, message_content, message_date) VALUES (:sender, :destination, :contenu, NOW())');
					$query->bindValue(':sender', $pseudo, PDO::PARAM_STR);
					$query->bindValue(':destination', $destination, PDO::PARAM_STR);
					$query->bindValue(':contenu', $contenu, PDO::PARAM_STR);
					$query->execute();
					echo "Votre message a bien été envoyé!";
					$error = 0;
					break;

				}
				else
				{
					$error = 1;
				}
		
			}

			if($error == 1 && !$destination == "")
			{
				echo "Le destinataire n'existe pas!";
			}

			if($destination == "")
			{
				echo "Vous avez oublié le destinataire!";
			}
		}
	?>
