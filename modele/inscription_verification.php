<?php

    $query=$db->prepare('SELECT COUNT(*) AS nbr FROM user WHERE user_login = :pseudo');
    $query->bindValue(':pseudo',$pseudo, PDO::PARAM_STR);
    $query->execute();
    $pseudo_free=($query->fetchColumn()==0)?1:0;
    $query->CloseCursor();

?>