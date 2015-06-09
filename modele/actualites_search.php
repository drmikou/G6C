<?php			
		if (isset($_POST['news_search']))
		{
			$news = $_POST['news_search'];

			$query= $db->prepare('SELECT * FROM news WHERE news_title= :news');		//PDO::prepare — Prépare une requête à l'exécution et retourne un objet
			$query->bindValue('news',$news, PDO::PARAM_STR);				//PDOStatement::bindValue — Associe une valeur à un paramètre
			$query->execute(); // Exécute la préparation
			$data = $query->fetch();

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
				if($data == null)
				{
					echo "Cet article n'existe pas";
				}		
		}
	?>