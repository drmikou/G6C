<?php
	$query= $db->prepare('DELETE from user  WHERE user_login= :login');
	$query->execute(array('login'=> $pseudo)); // Exécute la préparation
?>		