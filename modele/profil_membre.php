<!-- Recherche des informations de profil -->

<?php

	if(isset($_POST["membre_search"]))
	{
		$pseudo = $_POST["membre_search"];

		$query= $db->prepare('SELECT * FROM user WHERE user_login= :login');        //PDO::prepare — Prépare une requête à l'exécution et retourne un objet
    	$query->bindValue('login',$pseudo, PDO::PARAM_STR);             //PDOStatement::bindValue — Associe une valeur à un paramètre
    	$query->execute(); // Exécute la préparation
    	$data = $query->fetch();
	}
	
?>