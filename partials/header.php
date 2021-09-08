<header>
    <nav>
        <ul>
            <li><a href="index.php">Acceuil</a></li>
        </ul>
        <?php if (isset($_SESSION["logged"]) && $_SESSION["logged"] === true): ?>
            <ul>
                <li><a href="controllers/logout_controller.php">Déconnexion</a></li>
            </ul>
        <?php else: ?>
            <ul>
                <li class="a-margin"><a href="register.php">S'inscrire</a></li>
                <li><a href="login.php">Connexion</a></li>
            </ul>
        <?php endif; ?>
    </nav>
</header>