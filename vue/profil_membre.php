<body>

        <!-- Formulaire recherche profil -->
        <div class="centrage3">
            <?php include("../vue/profil_membre_form.php"); ?>
        </div>

        <?php include("../modele/profil_membre.php"); ?>

        <!-- Affichage du profil recherché -->
        <div class="centrage2">
            <div id="profil_data">

                <div class="titre"> Profil recherché</h2> </div>
                        <div class="bloc">
                                <img  src="../vue/images/profil.png" class="imageflottante" alt="profil" id="profil" width="30" /><div class= "decalage">Pseudo :</div> <br>     <div class="donnee"> <?php echo $data['user_login'] ?> </div> <br>
                        </div>
                        
                        <div class="bloc">
                                <img  src="../vue/images/profil.png" class="imageflottante" alt="profil" id="profil" width="30" /><div class= "decalage">Prénom :</div> <br>     <div class="donnee"> <?php echo $data['user_surname'] ?> </div> <br>
                        </div>

                        <div class="bloc">
                                <img  src="../vue/images/region.png" class="imageflottante" alt="region" id="region" width="30" /><div class= "decalage">Adresse : </div><br> <br>     <div class="donnee"> <?php echo $data['user_town'] ?> <?php echo $data['user_region'] ?> </div> <br>
                        </div>
                        
                    <div class="bloc">
                        <img  src="../vue/images/note.png" class="imageflottante" alt="region" id="region" width="30" />
                                <div class= "decalage">Note : </div><br> <br>     
                                <div class="donnee">
                                        <?php include("../vue/notation_affichage.php"); ?> 
                                        <?php include("../vue/notation_envoyer.php");?>
                                </div> 
                        <br>
                    </div>

            </div>
        </div>
        <?php } ?>


    </body>

        <!-- Footer-->
        <?php include("../vue/footer.php"); ?>
        
    
</html>
