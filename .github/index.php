<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <title>Cristal</title>
    <link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
<?php
session_start();
if(isset($_SESSION['id']))
    header('Location: php/gemme');
require 'php/config_database.php';
require 'php/verification_login.php';
?>
<div class="Login_Frame">
    <h1>Connexion</h1>
    <form method="POST">
        <div class="case">
            <label>Email</label>
            <input required="" name="email" type="email">
        </div>
        <div class="case">
            <label>Mot de passe</label>
            <input required="" name="password" type="password">
        </div>
        <p class="souvenir">
            <a href="php/forgot_password">Mot de passe oublié?</a>
        </p>
        <div class="conec">
            <button type="submit" name="connexion">Connexion</button>
        </div>
    </form>
    <br>
    <span><?php echo $message; ?></span>
    <br>
    <p class="nocompte">
        Pas de compte,
        <a href="php/register">Inscrit toi!</a>
    </p>
</div>
</body>
</html>
