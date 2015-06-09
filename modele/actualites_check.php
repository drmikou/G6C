<?php
		if (isset($_POST['news_check']))
		{
			$reponse= $db->query('SELECT * FROM news ORDER BY news_id DESC');

			while($data= $reponse->fetch())
			{
	?>
				<br>
				<div class= "news_affichage">
					<div class= "affichage_title">
						<?php echo $data['news_title'] ?>
					</div>

					<div class= "affichage_date">
						<?php echo $data['news_date'] ?>
					</div>

					<div class= "affichage_content">
						<?php echo $data['news_content'] ?>
					</div> 
				</div>
				<br>
<?php
			}
		}
?>