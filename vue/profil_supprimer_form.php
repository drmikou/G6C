<form action="<?php echo htmlspecialchars($_SERVER['REQUEST_URI'], ENT_QUOTES); ?>" method="post">

        <h4>Supprimer mon profil</h4>
            <p>
                <label for="mdp_actuel">Tapez votre mot de passe</label> <!-- it provides a usability improvement for mouse users, because if the user clicks on the text within the <label> element, it toggles the control. -->
                <input type="password" name="mdp_actuel" id="mdp_actuel" value=""/>
            </p>
			<p><input type="submit" name="valider" value="Supprimer mon profil VegATable" /></p>