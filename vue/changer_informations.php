<!-- Formulaire -->
<div class= "centrage3">
    <?php include("../vue/changer_info_form.php"); ?>
</div>

<!-- Changement de mot de passe-->
    <?php


        if (isset($_POST['mdp_actuel']) && isset($_POST['mdp_new']) && isset($_POST['mdp_new_check']) && isset($pseudo) )
        {
            
            $mdp_actuel= $_POST['mdp_actuel'];
            $mdp_new= $_POST['mdp_new'];
            $mdp_new_check= $_POST['mdp_new_check'];

			$key = 'f6d2qds64q92';
			$mdp_actuel_encrypted = base64_encode(mcrypt_encrypt(MCRYPT_RIJNDAEL_256,md5($key), $mdp_actuel,MCRYPT_MODE_CBC, md5(md5($key))));

            $query = $db->prepare('SELECT user_password FROM user WHERE user_login= :login'); //PDO::prepare — Prépare une requête à l'exécution et retourne un objet
            $query->execute(array('login' => $pseudo)); // Exécute la préparation
            $data = $query->fetch();

            if($data['user_password'] == $mdp_actuel_encrypted && $mdp_new == $mdp_new_check && 3 < strlen($mdp_new) && strlen($mdp_new) < 15)
            {
            	$mdp_new_encrypted = base64_encode(mcrypt_encrypt(MCRYPT_RIJNDAEL_256,md5($key), $mdp_new,MCRYPT_MODE_CBC, md5(md5($key))));
                $query= $db->prepare('UPDATE user SET user_password = :mdp WHERE user_login= :login');
                $query->execute(array('mdp'=> $mdp_new_encrypted ,'login'=> $pseudo)); // Exécute la préparation
                echo "Votre mot de passe a bien été changé!";
            }
            elseif($data['user_password'] != $mdp_actuel_encrypted)
            {
                echo "Votre mot de passe est faux!";
            }
            elseif ($mdp_new != $mdp_new_check)
            {
                echo "Votre nouveau mot de passe ne correspond pas!";
            }
            elseif(strlen($mdp_new) < 3 or strlen($mdp_new) > 15)
            {
                echo "Votre mot de passe doit avoir une longueur comprise entre 3 et 15 caractères!";
            }
        }

    ?>


<!-- Changement adresse mail -->
    <?php


        if (isset($_POST['mdp_actuel_mail']) && isset($_POST['mail_new']) && isset($_POST['mail_new_check']) && isset($pseudo) )
        {
            
            $mdp_actuel_mail= $_POST['mdp_actuel_mail'];
            $mail_new= $_POST['mail_new'];
            $mail_new_check= $_POST['mail_new_check'];


			$key = 'f6d2qds64q92';
			$mdp_actuel_mail_encrypted = base64_encode(mcrypt_encrypt(MCRYPT_RIJNDAEL_256,md5($key), $mdp_actuel_mail,MCRYPT_MODE_CBC, md5(md5($key))));
			
            $query = $db->prepare('SELECT user_password FROM user WHERE user_login= :login'); //PDO::prepare — Prépare une requête à l'exécution et retourne un objet
            $query->execute(array('login' => $pseudo)); // Exécute la préparation
            $data = $query->fetch();

            if($data['user_password'] == $mdp_actuel_mail_encrypted && $mail_new == $mail_new_check)
            {
                $query= $db->prepare('UPDATE user SET user_mail = :mail WHERE user_login= :login');
                $query->execute(array('mail'=> $mail_new ,'login'=> $pseudo)); // Exécute la préparation
                echo "Votre mail a bien été changé!";
            }
            elseif($data['user_password'] != $mdp_actuel_mail_encrypted)
            {
                echo "Votre mot de passe est faux!";
            }
            elseif ($mail_new != $mail_new_check)
            {
                echo "Votre nouveau mail ne correpond pas!";
            }
        }

    ?>

<!-- Changement d'adresse-->
    <?php


        if (isset($_POST['phone_new']) && isset($pseudo) )
        {
            $town= $_POST['town_new'];
            $street= $_POST['street_new'];
            $region= $_POST['region_new'];

            $query= $db->prepare('UPDATE user SET user_town = :town, user_street = :street, user_region = :region WHERE user_login= :login');
            $query->execute(array('town'=> $town, 'street' => $street, 'region' => $region , 'login'=> $pseudo)); // Exécute la préparation
            echo "Votre numéro de téléphone a bien été changé!";
        }

    ?>  

<!-- Changement téléphone-->
    <?php


        if (isset($_POST['phone_new']) && isset($pseudo) )
        {
            $phone= $_POST['phone_new'];

            $query= $db->prepare('UPDATE user SET user_phone = :phone WHERE user_login= :login');
            $query->execute(array('phone'=> $phone ,'login'=> $pseudo)); // Exécute la préparation
            echo "Votre numéro de téléphone a bien été changé!";
        }

    ?>    


            <!-- Footer-->
        <?php include("../vue/footer.php"); ?>
        
    
</html>
