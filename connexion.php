<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>NiceEvents - Connexion</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php include 'header.php'; ?>

    <main>
        <h1>Connexion</h1>

        <form action="traitement_connexion.php" method="post">
            <label for="pseudo">Pseudo :</label>
            <input type="text" id="pseudo" name="pseudo" required>

            <label for="motdepasse">Mot de passe :</label>
            <input type="password" id="motdepasse" name="motdepasse" required>

            <button type="submit">Se connecter</button>
        </form>

        <p>Pas encore inscrit ? <a href="inscription.php">Créer un compte</a></p>
    </main>

    <script src="script.js"></script>
</body>
</html>