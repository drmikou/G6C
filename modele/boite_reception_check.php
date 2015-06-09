<?php
	$query_check= $db->prepare('UPDATE message SET message_read = 1 WHERE message_destination= :login');
	$query_check->execute(array('login'=> $pseudo)); // Exécute la préparation
	
?>