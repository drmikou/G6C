<div id="bloc_chat" class="centrage">

	<?php // VISITEUR
		if($id==0)
		{
	?>
			<div id="chat">					
	<?php
				include("../modele/chat_visiteur.php");
				
				while($msg = $allmsg->fetch())
				{
	?>
					<b> <?php echo $msg['chat_pseudo'];?> :</b> <?php echo date($msg['chat_date']) ; ?> <?php echo $msg['chat_message']; ?>
					<br>
	<?php
				}
	?>
			</div>
	<?php
		}
		else
		{
	?>
			<div id="chat">					
	<?php
				include("../modele/chat_utilisateur.php");

				while($msg = $allmsg->fetch())
				{
	?>
					<b> <?php echo $msg['chat_pseudo']; ?> :</b> <?php echo date($msg['chat_date']) ; ?>   	<?php echo $msg['chat_message']; ?>
					<br>
	<?php
				}
	?>
			</div>

			<?php include("../vue/chat_saisie.php"); ?>

	<?php
		}
	?> 
</div>
