	<!-- Affichage option -->
	<div id="option">
		<?php
			include("../vue/boite_reception_form.php");
		?>
	</div>

	<!-- Affichage tableau -->
	<div class= "titre">

		<div class= "de">
			<img  src="../vue/images/profil.png" class="imageflottante" alt="de" id="de" width="30" /> De:
		</div>

		<div class= "date">
			<img  src="../vue/images/calendar.png" class="imageflottante" alt="calendar" id="calendar" width="30" /> Date:
		</div>

		<div class= "contenu">
			<img  src="../vue/images/content.png" class="imageflottante" alt="content" id="content" width="30" />Contenu:
		</div>

	</div>

	<?php
		while($message= $query_message->fetch())
		{
	?>

	<?php			
			if($message['message_read'] == 1)
			{
	?>
						<br>
						<div class= "data">
							<div class= "de2">
								<?php echo $message['message_sender'] ?>
							</div>

							<div class= "date2">
								<?php echo $message['message_date'] ?>
							</div>

							<div class= "contenu2">
								<?php echo $message['message_content'] ?>
							</div> 
						</div>
						<br>
	<?php			
			}
			else
			{
	?>		
						<br>
						<div class= "data_red">
							<div class= "de2">
								<?php echo $message['message_sender'] ?>
							</div>

							<div class= "date2">
								<?php echo $message['message_date'] ?>
							</div>

							<div class= "contenu2">
								<?php echo $message['message_content'] ?>
							</div> 
						</div>
						<br>
	<?php		
			}			
		}
	?>


	<!-- Marqué comme lu -->
	<?php
			if (isset($_POST['message_check']))
			{
				include("../modele/boite_reception_check.php");
			}
	?>

	</div>