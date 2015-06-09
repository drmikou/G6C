<?php
	$query_message= $db->prepare('SELECT * FROM message WHERE message_destination= :login ORDER BY message_id DESC');
	$query_message->bindValue('login',$pseudo, PDO::PARAM_STR);
	$query_message->execute(); // Exécute la préparation
?>