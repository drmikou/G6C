<?php
        $query= $db->prepare('SELECT message_read FROM message WHERE message_destination= :login'); 

        $query->bindValue('login',$pseudo, PDO::PARAM_STR);

        $query->execute();

        
        while($data= $query->fetch())
        {
            if($data['message_read'] == 0)
            {
                $notification= 0;
                break;
            }
            else
            {
            $notification = 1;
            }
        }
?>