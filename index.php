<?php
session_start();

$evenements = [];
if (file_exists('evenements.json')) {
    $evenementsData = file_get_contents('evenements.json');
    if (!empty($evenementsData)) {
        $evenements = json_decode($evenementsData, true);
    }
}


?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>NiceEvents - Accueil</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php include 'header.php'; ?>

    <main>
        <div id="event-feed">
            <h1>Bienvenue sur NiceEvents</h1>
            <p id="subtext">Découvrez les prochains événements à Nice :</p>
            <?php foreach ($evenements as $index => $evenement) { ?>
                <?php include 'event_card.php'; ?>
            <?php } ?>
        </div>
    </main>

    <script src="script.js"></script>
</body>
</html>
