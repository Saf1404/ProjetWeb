<header>
    <nav>
        <a href="index.php">ACCUEIL</a>
        <a href="informations.php">INFORMATIONS</a>
        <?php if (isset($_SESSION["pseudo"])) { ?>
            <a href="publier_evenement.php">PUBLIER UN EVENEMENT</a>
            <a href="index.php"><?php echo $_SESSION["pseudo"];?></a>
            <a href="deconnexion.php">SE DECONNECTER</a>
        <?php } else { ?>
            <a href="connexion.php" class="login-link">SE CONNECTER</a>
        <?php } ?>
    </nav>
</header>
