<body>

	<div id="bloc_page">
        <h1>Votre compte</h1>
    </div>

    <!-- Côté du profil-->  
        <?php include("../vue/aside_profil.php"); ?>


    <!-- Mon profil public --> 

        <div id="profil_public">
            <?php include("../vue/profil_public.php"); ?>
        </div>   

        <script type="text/javascript">
            afficher_cacher('profil_public');
        </script> 


    <!-- Mes informations --> 
        <div id="mes_informations">
            <?php include("../vue/mes_informations.php"); ?>
        </div>   

        <script type="text/javascript">
            afficher_cacher('mes_informations');
        </script>

    <!-- Boite de réception --> 
        <div id="boite_reception">
            <?php include("../vue/boite_reception.php"); ?>
        </div>   

        <script type="text/javascript">
            afficher_cacher('boite_reception');
        </script>

   
    <!-- Envoyer un messsage --> 
        <div id="message_envoyer">
            <?php include("includes/message_envoyer.php"); ?>
        </div>   

        <script type="text/javascript">
            afficher_cacher('message_envoyer');
        </script>

</body>

        <!-- Footer-->
        <?php include("../vue/footer.php"); ?>
        
    
</html>
