<?php
	$query = $db->prepare('SELECT user_id, user_login, user_password, user_admin FROM user WHERE user_login= :login'); //PDO::prepare — Prépare une requête à l'exécution et retourne un objet
	$query->bindValue('login',$_POST['login'], PDO::PARAM_STR); //PDOStatement::bindValue — Associe une valeur à un paramètre
	$query->execute(array('login' => $_POST['login'])); // Exécute la préparation
	$data = $query->fetch();
?>