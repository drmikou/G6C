<?php


$receiver = $data[user_id];
$a_note = 0;

$query= $db->prepare('SELECT * FROM note WHERE note_receiver= :receiver');
$query->bindValue('receiver',$receiver, PDO::PARAM_STR);
$query->CloseCursor();

while ($donnees = $query->fetch())
 {
    if($donnees[note_noteur] == $pseudo)
    {
     $a_note = 0;
     break;
    }
    else
    {
      $a_note = 1;
    }
  
 }
 
 ?>
