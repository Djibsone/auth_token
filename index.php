<!DOCTYPE html>
<html>
<head>
	<title>Formulaire de connection</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="./assets/style.css">
</head>
<body>

	<div class="container">
		<p>Formulaire de connection</p>
		<form action="controllers/indexController.php" method="post">
			<label>Email :</label>
			<input type="email" id="email" name="email" placeholder="name@gmail.com">
            <br><br>
			<label>Mot de passe :</label>
			<input type="password" id="password" name="password" placeholder="***********">
            <br><br>
			<button type="submit" name="connecte">Se connecter</button>
            <a href="./views/recover_password.php">Mot de passe oublié?</a>
            <br><br>
            <a href="./views/register.php">Inscrivez-vous ici</a>
		</form>
	</div>

</body>
</html>
