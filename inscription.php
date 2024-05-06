<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>NiceEvents - Inscription</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php include 'header.php'; ?>

    <main>
        <h1>Inscription</h1>

        <form action="traitement_inscription.php" method="post">
            <label for="pseudo">Pseudo :</label>
            <input type="text" id="pseudo" name="pseudo" required>

            <label for="motdepasse">Mot de passe :</label>
            <input type="password" id="motdepasse" name="motdepasse" required>

            <button type="submit">S'inscrire</button>
        </form>
    </main>

    <script src="script.js"></script>
</body>
</html>