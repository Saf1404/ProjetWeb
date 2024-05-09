<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

session_start();

// Vérifier si l'utilisateur est connecté
if (!isset($_SESSION["pseudo"])) {
    header("Location: connexion.php");
    exit();
}

// Traitement de l'ajout d'un événement
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $titre = $_POST["titre"];
    $description = $_POST["description"];
    $lieu = $_POST["lieu"];
    $date = $_POST["date"];
    $createur = $_SESSION["pseudo"];


    $evenements = [];
    if (file_exists('evenements.json')) {
        $evenementsData = file_get_contents('evenements.json');
        if (!empty($evenementsData)) {
            $evenements = json_decode($evenementsData, true);
        }
    }

    // publier le nouvel événement au tableau des événements
    $evenements[] = [
        "titre" => $titre,
        "description" => $description,
        "lieu" => $lieu,
        "date" => $date,
        "createur" => $createur,
        "participants" => [],
        "interesses" => []
    ];

    file_put_contents('evenements.json', json_encode($evenements));

    header("Location: index.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>NiceEvents - Publier un événement</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php include 'header.php'; ?>

    <main>

        <form action="publier_evenement.php" method="post">
            <h1>Publier un événement</h1>
            <label for="titre">Titre :</label>
            <input type="text" id="titre" name="titre" class="event-input" required>

            <label for="description">Description :</label>
            <textarea id="description" name="description" class="event-textarea" required></textarea>

            <label for="lieu">Lieu :</label>
            <input type="text" id="lieu" name="lieu" class="event-input" required>

            <label for="date">Date et heure :</label>
            <input type="datetime-local" id="date" name="date" class="event-input" required>

            <button type="submit">Publier</button>
        </form>
    </main>

    <script src="script.js"></script>
</body>
</html>
