    <body>

        <div id="bloc_page">

        	<?php include("../vue/recherche_fruit_legume_form.php");?>
        	<?php include("../modele/recherche_fruit_legume.php");?>

			<marquee id="id1" height="110" width="1000" scrollamount="2" loop="0">
                    <span onmouseover="getElementById('id1').stop();" onmouseout="getElementById('id1').start();">

                        <?php 

                            $request='SELECT fruit_legumes_nom FROM fruit_legumes ORDER BY RAND()';
                        
                            $reponse = $db->query($request);

                            if(isset($reponse))
                            {

	                            while ($donnees = $reponse->fetch())
	                            {
	                            	echo' <a href="../controleur/fruit_legume.php?barre_recherche='.$donnees["fruit_legumes_nom"].'"><img src="../vue/images/fruits_legumes/'.$donnees["fruit_legumes_nom"].'.jpg" title="'.$donnees["fruit_legumes_nom"].'"alt="Image flottante2" class="imageflottante"width="100" heigh="100" /></a> ';
	                            }

                            }

                            $reponse->closeCursor(); // Termine le traitement de la requête */
                        ?>
                    </span>
            </marquee>


        </div>

	</body>


        <!-- Footer-->
        <?php include("../vue/footer.php"); ?>
               
    
</html>
