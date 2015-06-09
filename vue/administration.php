

	<body>


	<!-- Aside de l'administration-->
        <?php 	   		
       		if($admin == 1)
	    	{
        		include("../vue/aside_administration.php");
        ?>

		<!-- ACTUALITE -->

		            <!-- Supprimer une actualité -->
		            <div id="actualite_supprimer">
		                <?php include("../vue/actualite_supprimer.php"); ?>
		            </div>
		            
		            <script type="text/javascript">
		                afficher_cacher('actualite_supprimer');
		            </script>

		<!-- Membres -->

		            <!-- Supprimer un membre -->
		            <div id="membre_supprimer">
		                <?php include("../vue/membre_supprimer.php"); ?>
		            </div>
		            
		            <script type="text/javascript">
		                afficher_cacher('membre_supprimer');
		            </script>


		<?php
		    }
		    else
		    {
		        echo "Vous n'êtes pas un administrateur! Veuillez vous connecter svp.";
		    }
		?>

	</body>

		<!-- Footer-->
			<?php include("../vue/footer.php"); ?>

</html>