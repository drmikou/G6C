<?php

	$sender = "Veg A Table";
	$destination = $_POST['pseudo'];
	$contenu = "Bienvenue sur Veg A Table!";

	$query=$db->prepare('INSERT INTO message (message_sender, message_destination, message_content, message_date) VALUES (:sender, :destination, :contenu, NOW())');
	$query->bindValue(':sender', $sender, PDO::PARAM_STR);
	$query->bindValue(':destination', $destination, PDO::PARAM_STR);
	$query->bindValue(':contenu', $contenu, PDO::PARAM_STR);
	$query->execute();
?>