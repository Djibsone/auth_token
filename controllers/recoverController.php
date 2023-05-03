<?php
require_once '../models/config.php';

if (isset($_POST['envoie'])) {
    if (!empty($_POST['email'])) {
        $email = htmlspecialchars($_POST['email']);

        $check = getUser($email);
        $data = $check->fetch();
        $row = $check->rowCount();

        if ($row) {

            $token = bin2hex(openssl_random_pseudo_bytes(24));
            $token_user = $data['token'];
            $add = addPasswordReset($token_user, $token);
            $link = '../controllers/saveController.php?u='.urlencode($token_user).'&token='.urlencode($token);

            if ($add) {
                echo "<h1 style='text-align: center'><a href='$link'>Cliquez ici pour reinitialiser votre mot de passe !</a></h1>";
            } else {
                echo "<script>alert('Erreur d'\insertion'); window.location = '../views/recover_password.php'</script>";
            }
            
        } else {
            echo "<script>alert('Le compte n\'existe pas.'); window.location = '../views/recover_password.php'</script>";
        }
        
    } else {
        echo "<script>alert('Veuillez renseigner les champs !'); window.location = '../views/recover_password.php'</script>";
    }
    
}