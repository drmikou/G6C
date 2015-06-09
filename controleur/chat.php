<div id="bloc_chat" class="centrage">

<br> <br>
	<h5> Le chat </h5>
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
					<div class="chat_pseudo"> <?php echo $msg['chat_pseudo'];?> : </div> [<?php echo date($msg['chat_date']) ; ?>]<div class="chat_message"> <?php echo $msg['chat_message']; ?></div>
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
					<div class="chat_pseudo"> <?php echo $msg['chat_pseudo']; ?>:</div> [<?php echo date($msg['chat_date']) ; ?>] <div class="chat_message"><?php echo $msg['chat_message']; ?></div>
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
