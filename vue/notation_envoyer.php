<?php 

  include("../modele/notation_check.php");
  
  if($a_note == 1)
  {
    include("../vue/notation_form.php");
    include("../modele/notation_envoyer.php");
  }
  
?>
