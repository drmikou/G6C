<?php
    require '../modele/phpmailer/PHPMailerAutoload.php';
    $mail = new PHPMailer;


    $mail->isSMTP();                                      
    $mail->Host = 'smtp.gmail.com';  
    $mail->SMTPAuth = true;                               
    $mail->Username = 'veegatable@gmail.Com';                 
    $mail->Password = 'lestomatescbon';                           
    $mail->SMTPSecure = 'tls';                            
    $mail->Port = 587;                                    

    $mail->From = 'Support@VegATable.com'; 
    $mail->FromName = 'VegATable';
    $mail->addAddress($email);     

    $mail->isHTML(true);                                  

    $mail->Subject = 'Confirmation de votre inscription a la communaute VegATable';
    $mail->Body    = 'Bonjour '.stripslashes(htmlspecialchars($_POST['name'])).' '.stripslashes(htmlspecialchars($_POST['surname'])).', nous avons le plaisir de confirmer votre inscription à la communaute VegATable dédiee aux achats et echanges de fruits et legumes proches de votre region !';
    				  

    $mail->AltBody = 'Le mail est envoyé';

    if(!$mail->send())
    {
        echo 'Le message n\'a pas été envoyé, vérifiez votre adresse email.';
        echo 'Mailer Error: ' . $mail->ErrorInfo;
    }
    else 
    {
        echo 'Un mail de confirmation a été envoyé à votre adresse email.';
    }

       
?>