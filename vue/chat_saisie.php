<div id="saisie_chat" >

		<form method="post" action=""> 
				<h4><?php if(isset($pseudo)){ echo $pseudo ;}?></h4>
			<textarea type="text" name="message" placeholder"MESSAGE"></textarea><br>
			<input type="submit" value="Envoyer" />					
		</form>
</div>