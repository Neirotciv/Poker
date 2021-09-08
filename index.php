<?php session_start() ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <?php include("partials/head.php") ?>
</head>
<body>
    <?php include("partials/header.php") ?>
    
    <div class="main-wrapper">
        <?php if (isset($_SESSION["logged"]) && $_SESSION["logged"] === true): ?>
            <p>Bienvenue <?= $_SESSION["username"] ?> il y a ___ joueurs en ligne. <a href="">Rejoindre la partie</a></p>
        <?php else: ?>
            <div class="inform">
                <p>Veuillez vous connecter pour participer à une partie</p>
            </div>
        <?php endif; ?>
    </div>
</body>
</html>