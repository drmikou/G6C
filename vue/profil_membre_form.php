<form action="<?php echo htmlspecialchars($_SERVER['REQUEST_URI'], ENT_QUOTES); ?>" method="post">
    
        <h4>Rechercher un profil</h4>
            <p>
                <label for="membre_search">Pseudo du membre</label> <!-- it provides a usability improvement for mouse users, because if the user clicks on the text within the <label> element, it toggles the control. -->
                <input type="text" name="membre_search" id="membre_search" value=""/>
            </p>
            
            <p>
                <input type="submit" name="submit" value="Afficher le profil" />
            </p>
    
</form>