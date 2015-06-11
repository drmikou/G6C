<?php

	$mdp_actuel= $_POST['mdp_actuel'];
	$key = 'f6d2qds64q92';
	$mdp_actuel_encrypted = base64_encode(mcrypt_encrypt(MCRYPT_RIJNDAEL_256,md5($key), $mdp_actuel,MCRYPT_MODE_CBC, md5(md5($key))));
		
	$query = $db->prepare('SELECT user_password FROM user WHERE user_login= :login'); //PDO::prepare — Prépare une requête à l'exécution et retourne un objet
	$query->execute(array('login' => $pseudo)); // Exécute la préparation
	$data = $query->fetch();
	
?>		
