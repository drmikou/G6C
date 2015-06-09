<?php

		if (isset($_POST['titre']) && isset($_POST['contenu']))
		{
			$titre= $_POST['titre'];
			$contenu= $_POST['contenu'];
		

		$query=$db->prepare('INSERT INTO news (news_title, news_content) VALUES (:titre, :contenu)');
		$query->bindValue(':titre', $titre, PDO::PARAM_STR);
		$query->bindValue(':contenu', $contenu, PDO::PARAM_STR);
		$query->execute();
		}
?>