<?php 

	include("../modele/echanges.php");

?>

</b>
	<form method="post" action="">	

		<div class="proposer_echange">Proposer un échange</div><br><br>
		<p>
		<div id="bloc1">  
			<h6>Fruit ou légume échangé</h6>
			<p>
			<select name="produit_1">
				<?php
				$reponse = $db->query('SELECT * FROM fruit_legumes'); // requête sql "selectionne tout dans la table fruit_legumes
				while ($donnees = $reponse->fetch()) // On affiche chaque entrée une à une
				{
				$print='<option value="'.$donnees['fruit_legumes_nom'].'">'.$donnees['fruit_legumes_nom'].'</option>';
				echo $print;
				}

				$reponse->closeCursor(); // Termine le traitement de la requête
				?>
			</select><br><br> 
			<label for="quantite_produit_1"> Quantité en kg:</label>  <input name="quantite_produit_1" type="number" step="0.001" id="quantite_produit_1" /><br/>
			</p></p><br><br>
		</div>

		<div id="bloc2">
			<h6>Fruit ou légume souhaité</h6>
			<p>                    
			<select name="produit_2">
				<?php
				$reponse = $db->query('SELECT * FROM fruit_legumes'); // requête sql "selectionne tout dans la table fruit_legumes"
								                        
				while ($donnees = $reponse->fetch()) // On affiche chaque entrée une à une
				{
				$print='<option value="'.$donnees['fruit_legumes_nom'].'">'.$donnees['fruit_legumes_nom'].'</option>';
				echo $print;
				}

				$reponse->closeCursor(); // Termine le traitement de la requête
				?>
			</select><br><br>      
			<label for="quantite_produit_2"> Quantité en kg:</label>  <input name="quantite_produit_2" type="number" step="0.001" id="quantite_produit_2" /><br/>
			</p>
		</div>
		<textarea type="text" name="commentaire" placeholder"Tapez votre commentaire ici"></textarea><br>
		<input type="submit" value="Envoyer" />
	</form>
