<!DOCTYPE html>
<html>
<head>
	<title>Formulaire d'inscription</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="../assets/style.css">
</head>
<body>

	<div class="container">
		<p>Formulaire d'inscription</p>
		<form action="../controllers/registerController.php" method="post">
			<label>Pseudo :</label>
			<input type="text" id="pseudo" name="pseudo" placeholder="votre pseudo">
			<br><br>
			<label>Email :</label>
			<input type="email" id="email" name="email" placeholder="name@gmail.com">
			<br><br>
			<label>Mot de passe :</label>
			<input type="password" id="password" name="password" placeholder="***********">
			<br><br>
			<label>Confirmer le mot de passe :</label>
			<input type="password" id="confirm_password" name="confirm_password" placeholder="***********">
			<br><br>
			<button type="submit" name="inscrit">S'inscrire</button>
            <a href="../">Connectez-vous ici</a>
		</form>
	</div>

</body>
</html>
