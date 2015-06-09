<?php

	$query=$db->prepare('SELECT COUNT(*) AS nbr FROM user WHERE user_email =:email');

    $query->bindValue(':email',$email, PDO::PARAM_STR);

    $query->execute();

    $mail_free=($query->fetchColumn()==0)?1:0;

    $query->CloseCursor();

?>