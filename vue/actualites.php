    <body>

        <div id="news_voir">



    		<!-- Formulaire -->
			 <?php include("../vue/actualites_form.php"); ?>



		
            <!-- Affichage tableau -->
                <div class= "news_tete">

                    <div class= "bloc_news">
                        Titre:
                    </div>

                    <div class= "bloc_date">
                        Date:
                    </div>

                    <div class= "bloc_contenu">
                        Contenu:
                    </div>

                </div>




			<!-- Traitement -->
   			<?php include("../modele/actualites_check.php"); ?>
   			<?php include("../modele/actualites_search.php"); ?>

   		</div>
   
	</body>
        <?php include("../vue/footer.php"); ?>
 

</html>