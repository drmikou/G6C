<!-- Header Utilisateur -->   
    <div class="centrage">

        <nav>

            <div id="conteneur_menu">

                    <div id="menu">
                        
                        <!-- Page d'accueil -->
                            <dl>
                                <div id="image_home">
                                    <a href="../controleur/index.php">
                                        <img  src="../vue/images/home.png" class="imageflottante" alt="logo" id="logo" width="40" heigh="100" />
                                    </a>
                                </div>
                            </dl>

                        <!-- Fruits et légumes -->
                            <dl>
                                <dt><a href="../controleur/fruits_et_legumes.php">Fruits et Légumes</a></dt>
                            </dl>

                        <!-- Page d'achats -->
                            <dl>
                                <dt><a href="../controleur/echange.php"> Echanges </a></dt>  
                            </dl>
                                        
                        <!-- Page de recettes -->         
                            <dl>
                                <dt><a href="../controleur/recette.php">Recettes</a></dt>
                            </dl>
                                                     
                        <!-- Profil -->
                            <dl>
                                <dt><a href="../controleur/profil.php"><?php echo $pseudo ?></a></dt>
                            </dl>
                        
                    </div>

            </div>

        </nav> 

    </div>