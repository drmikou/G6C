<form action="<?php echo htmlspecialchars($_SERVER['REQUEST_URI'], ENT_QUOTES); ?>" method="post">
    
        <h4>Supprimer un membre</h4>
            <p>
                <label for="membre_supp">Pseudo du membre:</label> <!-- it provides a usability improvement for mouse users, because if the user clicks on the text within the <label> element, it toggles the control. -->
                <input type="text" name="membre_supp" id="membre_supp" value=""/>
            </p>

            
            <p>
                <input type="submit" name="submit" value="Supprimer ce membre" />
            </p>
    
</form>