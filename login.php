<?php session_start() ?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <?php include("partials/head.php"); ?>
</head>
<body>
    <?php include("partials/header.php"); ?>
    <div class="main-wrapper">
        <h3>Connexion</h3>
        <form action="controllers/login_controller.php" method="POST">
            <input type="text" name="username" placeholder="Nom">
            <input type="password" name="password" placeholder="Password">
            <button type="submit">Se connecter</button>
        </form>
        <br><hr>
        <form action="controllers/login_controller.php" method="POST">
            <input type="hidden" name="username" placeholder="Nom" value="p1">
            <input type="hidden" name="password" placeholder="Password" value="p1">
            <button type="submit">player 1</button>
        </form>
        <form action="controllers/login_controller.php" method="POST">
            <input type="hidden" name="username" placeholder="Nom" value="p2">
            <input type="hidden" name="password" placeholder="Password" value="p2">
            <button type="submit">player 2</button>
        </form>
        <form action="controllers/login_controller.php" method="POST">
            <input type="hidden" name="username" placeholder="Nom" value="p3">
            <input type="hidden" name="password" placeholder="Password" value="p3">
            <button type="submit">player 3</button>
        </form>
        <form action="controllers/login_controller.php" method="POST">
            <input type="hidden" name="username" placeholder="Nom" value="p4">
            <input type="hidden" name="password" placeholder="Password" value="p4">
            <button type="submit">player 4</button>
        </form>
    </div>
</body>
</html>