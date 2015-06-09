<div id="form_co">
	<form action="<?php echo htmlspecialchars($_SERVER['REQUEST_URI'], ENT_QUOTES); ?>" method="post">
			<h4>Identifiant</h4> <!-- defines a caption for the <fieldset> element. -->
				<!-- Champ Login -->
				<p>
					<label for="login">Login :</label> <!-- it provides a usability improvement for mouse users, because if the user clicks on the text within the <label> element, it toggles the control. -->
					<input type="text" name="login" id="login" value="<?php if(!empty($_POST['login'])){echo htmlspecialchars($_POST['login'], ENT_QUOTES); } ?>"/>
				</p>

				<!-- Champ Password -->
				<p>
					<label for="password">Mot de passe :</label> 
	            	<input type="password" name="password" id="password" value="" />
				</p>
				<p>
	            	<input type="submit" name="submit" value="Identification" />
	            </p>
	</form>
</div>