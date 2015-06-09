<form method="post" action="inscription.php" enctype="multipart/form-data">

		<h4>Inscription </h4>
			<label for="name">* Nom :</label>  <input name="name" required type="text" id="name" /><br/>
			<label for="surname">* Prénom :</label>  <input name="surname" required type="text" id="surname" /><br/>
			<label for="birth">* Date de naissance:</label>  <input name="birth" required type="date" id="birth" /><br/>
								
			<label for="pseudo">* Pseudo :</label>  <input name="pseudo" required type="text" id="pseudo" /> (le pseudo doit contenir entre 3 et 15 caractères)<br/>
			<label for="password">* Mot de Passe : </label><input type="password" required name="password" id="password" /><br/>
			<label for="confirm">* Confirmer le mot de passe : </label><input type="password" required name="confirm" id="confirm"/>
								
									
			<label for="street">*Rue : </label><input type="text" required name="street" id="street" />
			<label for="sup">Complément d'adresse : </label><input type="text" name="sup" id="sup" /> <br/>
			<label for="town">* Ville : </label><input type="text" required name="town" id="town" />
            <label for="Département">* Département : </label>

                        <select name="dep">
                            <?php
                                $reponse = $db->query('SELECT * FROM departement'); // requête sql "selectionne tout dans la table region"
                                                                                        // On affiche chaque entrée une à une
                                while ($donnees = $reponse->fetch()){
                                    $print='<option accesskey=""value="'.$donnees['departement_nom'].'">'.$donnees['departement_nom'].'</option>';
                                    echo $print;
                                }

                                $reponse->closeCursor(); // Termine le traitement de la requête
                            ?>
                        </select>             
								
			<label for="email">* Votre adresse Mail : </label><input type="email" required name="email" id="email" /><br/>
			<label for="phone">Votre numéro de téléphone: </label><input type="tel" name="phone" id="phone" /><br/>


			<p>Les champs précédés d un * sont obligatoires</p>
			<p><input type="submit" name="valider" value="S'inscrire" /></p>


</form>