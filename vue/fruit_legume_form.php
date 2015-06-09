<form action="<?php echo htmlspecialchars($_SERVER['REQUEST_URI'], ENT_QUOTES); ?>" method="post">
    

        <h4>Ajouter un fruit ou légume</h4>
            <p>
                <label for="fruit_legumes_nom">Nom du fruit / légume:</label>
                <input type="text" name="fruit_legumes_nom" id="fruit_legumes_nom" value=""/>
            </p>

            <p>
                <label for="fruit_legumes_description">Description du fruit / légume  :</label> 
                <textarea type="text" name="fruit_legumes_description" id="fruit_legumes_description" value="" row="30" cols="120"></textarea>
            </p>
            
            <p>
                <input type="submit" name="submit" value="Ajouter un fruit ou légume" />
            </p>

    
</form>
