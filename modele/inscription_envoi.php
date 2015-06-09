
<?php
    $query=$db-> prepare ('INSERT INTO user(user_login,user_password,user_name,user_surname,user_mail,user_birth, user_sup, user_town, user_street,user_phone, user_region) VALUES (:pseudo,:password, :name, :surname, :email,:birth,:sup,:town,:street,:phone, :dep)');
    
	$query->bindValue(':pseudo', $pseudo, PDO::PARAM_STR);

    $query->bindValue(':password', $pass_encrypted, PDO::PARAM_INT);

    $query->bindValue(':email', $email, PDO::PARAM_STR);

    $query->bindValue(':street', $street, PDO::PARAM_STR);

    $query->bindValue(':town', $town, PDO::PARAM_STR);

    $query->bindValue(':sup', $sup, PDO::PARAM_STR);

    $query->bindValue(':name', $name, PDO::PARAM_STR);

    $query->bindValue(':surname', $surname, PDO::PARAM_STR);
    
    $query->bindValue(':birth', $birth, PDO::PARAM_STR);
    
    $query->bindValue(':phone', $phone, PDO::PARAM_STR);
	
	$query->bindValue(':dep', $dep, PDO::PARAM_STR);
    
    $query->execute();

    $_SESSION['pseudo'] = $pseudo;

    $_SESSION['id'] = $db->lastInsertId(); ;

    $query->CloseCursor();
?>