<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>NiceEvents - Connexion</title>
    <link rel="stylesheet" href="style.css">
    <style> 
           .bande {
            background-color: rgba(255, 255, 255, 0.5); 
            padding: 5px 10px; 
            border-radius: 5px;
            font-size: 1.2em; 
        }
    </style>
</head>
<body>
    <?php include 'header.php'; ?>

    <main>
        <h1><span class="bande">Connexion</span></h1>

        <form action="traitement_connexion.php" method="post">
            <label for="pseudo"><span class="bande">Pseudo :</span></label>
            <input type="text" id="pseudo" name="pseudo" required>

            <label for="motdepasse"><span class="bande">Mot de passe :</span></label>
            <input type="password" id="motdepasse" name="motdepasse" required>

            <button type="submit">Se connecter</button>
        </form>

        <p style="text-align: center;"><span class="bande">Pas encore inscrit ?</span></p>
        <form action="inscription.php" method="post" style="text-align: center;">
        <button type="submit" class="subscribe-btn">créer un compte</button>
    </form>
    </main>

    <script src="script.js"></script>
</body>
</html>
