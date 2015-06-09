<!DOCTYPE html>
<html>

    <head>

    	<!-- Titre -->
    	<?php
			if (!empty($titre))							// Si le titre n'est pas vide
			{
				echo '<title> '.$titre.' </title>';		// On affiche le titre
			}
			else 										//Sinon, on écrit Veg A Table par défaut
			{
				echo '<title> Veg A Table </title>';
			}
		?>

		<!-- xxxxx -->

        <meta charset="utf-8" />
        <link rel="stylesheet" href="../vue/style.css" />

    </head>


	<!-- Connexion à la base de données-->
    	<?php include("../modele/database_connection.php"); ?>

    <!-- Variable de session -->
		<?php include("../modele/session_variable.php"); ?>


	<!-- Header -->
		<?php include("header.php"); ?>


