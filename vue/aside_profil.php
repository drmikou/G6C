<!-- Côté du profil-->   

    <script type="text/javascript" src="afficher_cacher_div.js"></script>

    <div class="cote">
        <section>
            <div class="box">
                <img  src="../vue/images/communaute.png" class="imageflottante" alt="communaute" id="communaute" width="30" />                          
                <ul class="titre_list"> Communauté </ul>
                    <li><span class="bouton" id="bouton_texte" onclick="javascript:afficher_cacher('profil_public');">Mon profil public</span> </li>
                    <li> Tous vos commentaires </li>
                    <li> Mes évaluations </li>
                    <li><a href='../controleur/profil_membre.php'> Voir le profil d'un membre </a> </li>
            </div>
        </section>
                        
        <section>
            <div class="box">
                <img  src="../vue/images/config.png" class="imageflottante" alt="config" id="config" width="30" />                          
                <ul class="titre_list"> Paramètre du compte </ul>
                    <li><span class="bouton" id="bouton_texte" onclick="javascript:afficher_cacher('mes_informations');">Mes informations</span> </li>
                    <li><a href='../controleur/changer_informations.php'> Changer mes informations </a> </li>
                    <li><a href='../controleur/profil_supprimer.php'> Supprimer mon compte</a> </li>
            </div>
        </section>        

        <section>
            <div class="box">                          
                <img  src="../vue/images/message_aside.png" class="imageflottante" alt="message" id="message" width="30" />
                <ul class="titre_list"> Mes messages </ul> 
                    <li><span class="bouton" id="bouton_texte" onclick="javascript:afficher_cacher('boite_reception');">Boite de réception</span> </li>
                    <li><a href='../controleur/message_envoyer.php'> Envoyer un message </a> </li>
            </div>
        </section>                                              

    </div>