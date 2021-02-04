<?php
session_start();
if(!isset($_SESSION['user'], $_SESSION['pass'])){
    header('Location: index.php?error=sessionNotFound');
} ?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Connected</title>
    <link rel="stylesheet" href="./style.css">
</head>
<body>
    <div id="container">
        <a href="./index.php?deco" title="Déconnexion">Se déconnecter</a>
        <h1>Bienvenue sur la page secrète</h1>
        <p>Ceci est un petit paragraphe secret :-D</p>
    </div>
</body>
</html>