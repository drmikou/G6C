	<?php

		if (isset($_POST['titre_supp']))
		{
			$titre_supp= $_POST['titre_supp'];

			$req = $db->prepare('DELETE FROM news WHERE news_title = :titre_supp');
			$req->execute(array(
			'titre_supp' => $titre_supp

			));

		}
	?>