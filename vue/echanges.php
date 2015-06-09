
    <body>


    	<div id="bloc_echange">
    		<section>

		     	<?php // VISITEUR
				    if($id==0)
				    {
				?>
				        <br>
				<?php 
				        include("../vue/echanges_banniere.php"); 
				        include("../vue/echanges_recherche_form.php");
				        include("../modele/echanges_recherche.php"); 
				    }
				    else // Membre du site
				    {
				        include("../vue/echanges_banniere.php");
				        include("../vue/echanges_form.php");
				        include("../vue/echanges_recherche_form.php");
				        include("../modele/echanges_recherche.php");
					}
				?> 


            </section>
    	</div>


    </body>

    	<!-- Footer-->
        	<?php include("../vue/footer.php"); ?>

</html>