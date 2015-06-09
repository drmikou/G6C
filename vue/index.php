	<!-- Corps de l'accueil-->

	<body>

		<div id="bloc_page"> 


			<div id="home_image">
				<img  src="../vue/images/fruits-et-legumes-de-saison.jpg" class="imageflottante" alt="verger" id="verger" width="120%"/>
			</div>


			<div class="information"> 

				<?php 
					include("../modele/news.php");
				
					while($data = $reponse->fetch())
					{
				?>
						<section>
							<div class="boite">
								<h2 class="titre"> <?php echo $data['news_title']?> </h2>
									<div class="contenu">
										<p> <?php echo $data['news_content']?> </p>
									</div>
										<p class="bouton"><a href="#">Plus de détails</a></p>
							</div>
						</section>
								
				<?php				
					}
				?>
			</div>
					
			<?php include("../controleur/chat.php"); ?>


		</div>

	</body>



	<!-- Footer-->
		<?php include("../vue/footer.php"); ?>


</html>
