<?php

	$mdp_actuel= $_POST['mdp_actuel'];
		
	$query = $db->prepare('SELECT user_password FROM user WHERE user_login= :login'); //PDO::prepare — Prépare une requête à l'exécution et retourne un objet
	$query->execute(array('login' => $pseudo)); // Exécute la préparation
	$data = $query->fetch();
	
?>		