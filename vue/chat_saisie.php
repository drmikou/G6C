<div id="saisie_chat" >
	<b><?php if(isset($pseudo)){ echo $pseudo ;}?></b>
		<form method="post" action=""> 
			<textarea type="text" name="message" placeholder"MESSAGE"></textarea><br>
			<input type="submit" value="Envoyer" />					
		</form>
</div>