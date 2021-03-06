<?php require_once "../Modeles/Modele.php" ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Press+Start+2P&display=swap" rel="stylesheet">
    <title>TP Quizz</title>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">
        <a class="navbar-brand" href="index.php">Mon Quizz</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav" style="margin-left : auto">
                <?php if(isset($_SESSION["email"]) && !empty($_SESSION["email"])) { ?>
                    <a class="nav-link active" aria-current="page" href="CreerQuizz.php">Créer un Quizz</a>
                    <a class="nav-link active" aria-current="page" href="../Traitements/Deconnexion.php">Déconnexion</a>
                <?php } else { ?>
                    <a class="nav-link active" aria-current="page" href="inscription.php">Inscription</a>
                    <a class="nav-link" href="connexion.php">Connexion</a>
                <?php } ?>
            </div>
        </div>
    </div>
</nav>
