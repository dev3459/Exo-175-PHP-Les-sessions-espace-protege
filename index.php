<?php
    session_start();
    if(isset($_SESSION['user'], $_SESSION['pass'])){
        header('Location: ./fileProtege.php');
    }

    if(isset($_GET['deco'])){
        session_start();
        session_unset();
        session_destroy();
        header('Location: ./index.php?deconnexionSuccess');
    }

    if(isset($_GET['error'])){
        $err = $_GET['error'];
        if($err === "incorrect"){
            $respError = "Vos identifiants sont incorrect !";
        }elseif($err === "postNotFound"){
            $respError = "Une erreur dans l'envoi du formulaire c'est produit merci d'essayer dans quelques instant";
        }elseif($err === "sessionNotFound"){
            $respError = "Vous ne vous êtes jamais connecté sur ce site précédement merci de vous connectez !";
        }elseif($err === "empty"){
            $respError = "Merci de renseigner tout les champs !";
        }

        echo "<div class='error'>".$respError."</div>";
    }

    if(isset($_GET['deconnexionSuccess'])){
        echo "<div class='error deco'>Vous êtes bien déconnecter à bientôt !</div>";
    }
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Connexion</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div id="container">
        <form action="passwordVerif.php" method="POST">
            <input type="text" name="user" id="user" placeholder="Votre pseudo">
            <input type="password" name="pass" id="pass">
            <input type="submit" name="submit" id="submit">
        </form>
    </div>
</body>
</html>