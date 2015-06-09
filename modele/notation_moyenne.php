  <?php
        $reponse = $bdd->query('SELECT note FROM note WHERE note_receiver=:receiver');
        $reponse->bindValue(':receiver', $receiver, PDO::PARAM_STR);
        $reponse->execute();
        $count = 0;
        while ($donnees = $reponse->fetch())
        {
            $count = $count +1;
        }
        $reponse->closeCursor(); // Termine le traitement de la requête
        
        
        
        
        
        $query=$db->query('SELECT SUM(note) AS note_totale FROM note WHERE note_receiver=:receiver');
        $query->bindValue(':receiver', $receiver, PDO::PARAM_STR);
        $query->execute();
        $query->closeCursor();
        
        
        $note_finale = ($note_totale/$count);
        
        ?>
