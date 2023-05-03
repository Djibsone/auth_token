<!DOCTYPE html>
<html>
<head>
	<title>Formulaire de changement de mot de passe</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="../assets/style.css">
</head>
<body>

	<div class="container">
		<p class="row">
			Pour réinitialiser votre mot de passe, 
			veuillez entrer votre adresse e-mail ci-dessous. 
			Nous vous enverrons un lien de réinitialisation dans les plus brefs délais.
		</p>
		<form action="../controllers/recoverController.php" method="post">
			<label for="email">Email :</label>
			<input type="email" id="email" name="email" placeholder="name@gmail.com">
            <br><br>
			<button type="submit" name="envoie">Envoyer</button>
            <a href="../">Connectez-vous ici</a>
		</form>
	</div>

</body>
</html>
