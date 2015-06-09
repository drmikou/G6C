<?php

  
  $note = $_POST['note'];
  
  
  $query=$db-> prepare ('INSERT INTO note(note_receiver,id_noteur, note)  VALUES(:receiver,:pseudo,:note)');
  $query->bindValue(':pseudo', $pseudo, PDO::PARAM_STR);
  $query->bindValue(':receiver', $receiver, PDO::PARAM_INT);
  $query->bindValue(':note', $note, PDO::PARAM_STR);
  $query->CloseCursor();
   ?>
           
