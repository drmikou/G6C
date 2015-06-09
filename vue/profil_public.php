<div id="profil_data">


    <div class="titre">  Mon profil </div>

        <div class="bloc"> 
             <img  src="../vue/images/profil.png" class="imageflottante" alt="profil" id="profil" width="30" /><div class= "decalage">Pseudo :</div> <br>     <div class="donnee"> <?php echo $_SESSION['pseudo'] ?> </div> <br>
        </div>

        <div class="bloc">
             <img  src="../vue/images/profil_mail.png" class="imageflottante" alt="mail" id="mail" width="30" /><div class= "decalage"> E-mail : </div><br>     <div class="donnee"> <?php echo $data['user_mail'] ?> </div> <br>
        </div>

        <div class="bloc">
              <img  src="../vue/images/region.png" class="imageflottante" alt="region" id="region" width="30" /><div class= "decalage">Ma région : </div><br>     <div class="donnee"> <?php echo $data['user_region'] ?> </div> <br>
        </div>

        <div class="bloc">
              <img  src="../vue/images/note.png" class="imageflottante" alt="note" id="note" width="30" /><div class= "decalage">Ma note : </div><br>     <div class="donnee"> <?php echo $data['user_rate'] ?> </div> <br>
        </div>

        <div class="bloc">
            Ma photo : <br> <br>
        </div>

</div>