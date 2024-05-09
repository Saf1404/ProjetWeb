<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>NiceEvents - Inscription</title>
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
        <h1><span class="bande">Inscription</span></h1>

        <form action="traitement_inscription.php" method="post">
            <label for="pseudo"><span class="bande">Pseudo :</span></label>
            <input type="text" id="pseudo" name="pseudo" required>

            <label for="motdepasse"><span class="bande">Mot de passe :</span></label>
            <input type="password" id="motdepasse" name="motdepasse" required>

            <button type="submit">S'inscrire</button>
        </form>
    </main>

    <script src="script.js"></script>
</body>
</html>
