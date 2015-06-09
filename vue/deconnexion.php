	<body>

		<article>
			<?php
				if ($id==0) erreur(ERR_IS_NOT_CO);
				echo 'Vous êtes déconnecté. <br />';
				echo 'Cliquez <a href="'.htmlspecialchars($_SERVER['HTTP_REFERER']).'">ici</a> pour revenir à la page précédente.<br />';
				echo "<script type='text/javascript'>document.location.replace('../controleur/index.php');</script>";
			?>
		</article>

		<!-- Footer-->
        <?php include("../vue/footer.php"); ?>
        
    </body>

</html>