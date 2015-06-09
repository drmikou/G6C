<form action="<?php echo htmlspecialchars($_SERVER['REQUEST_URI'], ENT_QUOTES); ?>" method="post">
    
        <h4>Noter cet utilisateur</h4>
            <p>
                <label for="note">Note:</label> <!-- it provides a usability improvement for mouse users, because if the user clicks on the text within the <label> element, it toggles the control. -->
                <select name="note">
                  <option value="value1" selected>1</option> 
                  <option value="value2">2</option>
                  <option value="value3">3</option>
                  <option value="value3">4</option>
                  <option value="value3">5</option>
                </select>
                
                <p><input type="submit" name="valider" value="Noter" /></p>
           
    
</form>
