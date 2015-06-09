<!-- Header bandeau -->

<?php include("../vue/header_bandeau.php"); ?>

		<!-- Si l'utilisateur est connecté -->        
			<?php

				if($id !=0)
                {
                    include("../modele/notification.php");

                    if($notification== 0)
                    {
            ?>
                        <!-- Notification de message -->  
                            <a href="../controleur/profil.php">
                                <div id="image_message">
                                	<img  src="../vue/images/message.png" class="imageflottante" alt="noti_message" id="noti_message" width="70" heigh="100" />
                                </div>
                            </a>
            <?php
                    }
            ?>
                        <!-- Bouton de déconnexion -->      
                            <a href="../controleur/deconnexion.php">
                                <div id="image_logout">
                                    <img  src="../vue/images/logout.png" class="imageflottante" alt="logout" id="logout" width="40" heigh="100" />
                                </div>
                            </a>
			<?php       
				}    
			?>	


				</h1>

				<br>

                <div id="sous_titre">
                    Votre site d'échanges de fruits et légumes
                </div>
    	</div>
	</div>
</div>