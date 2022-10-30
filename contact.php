<!DOCTYPE html>
<html>
	<head>
		<link rel="stylesheet" href="zelda.css" type="text/css">
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Contact</title>
	</head>

	<a class="button" href="index.html">Home</a>
 	<div class="php">
	 	<?php
			if(($_POST['nom'] != "") && ($_POST['prénom'] != "") && ($_POST['mail'] != "") && ($_POST['tel'] != "")){
				echo("<p>Merci de votre retour !</p>");
			}
			else {
				echo("<p>Un ou plusieurs champs saisis sont invalides, veuillez les re-saisir</p>")
			}
		?>
	</div>
</html>
