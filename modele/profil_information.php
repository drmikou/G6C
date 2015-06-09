
<!-- Recherche des informations de profil -->

<?php
	$query= $db->prepare('SELECT * FROM user WHERE user_id= :id');        //PDO::prepare — Prépare une requête à l'exécution et retourne un objet
    $query->bindValue('id',$id, PDO::PARAM_STR);             //PDOStatement::bindValue — Associe une valeur à un paramètre
    $query->execute(); // Exécute la préparation
    $data = $query->fetch();
?>