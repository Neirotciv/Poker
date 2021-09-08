<?php session_start() ?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <?php include("partials/head.php"); ?>
</head>
<body>
    <?php include("partials/header.php"); ?>
    <div class="main-wrapper">
        <h3>Inscription</h3>
        <form action="controllers/register_controller.php" method="POST">
            <input type="text" name="username" placeholder="Nom">
            <input type="password" name="password" placeholder="Password">
            <button type="submit">S'inscrire</button>
        </form>
    </div>
</body>
</html>