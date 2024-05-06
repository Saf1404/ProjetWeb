<?php
session_start();

$evenements = [];
if (file_exists('evenements.json')) {
    $evenementsData = file_get_contents('evenements.json');
    if (!empty($evenementsData)) {
        $evenements = json_decode($evenementsData, true);
    }
}

function getRelativeDate($datetime) {
    $timestamp = strtotime($datetime);
    $diff = $timestamp - time();
    
    if ($diff < 60) {
        return "Dans moins d'une minute";
    } elseif ($diff < 3600) {
        return "Dans " . floor($diff / 60) . " minutes";
    } elseif ($diff < 86400) {
        return "Dans " . floor($diff / 3600) . " heures";
    } else {
        return "Le " . date("d/m à H:i", $timestamp);
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
        <h1>Bienvenue sur NiceEvents</h1>
        <p>Découvrez les prochains événements à Nice :</p>

        <div id="event-feed">
            <?php foreach ($evenements as $evenement) { ?>
                <div class="event">
                    <div class="event-body">
                        <h2><?php echo $evenement["titre"]; ?></h2>
                        <hr>
                        <p><?php echo nl2br(trim($evenement["description"])); ?></p>
                        <p>Lieu : <?php echo $evenement["lieu"]; ?></p>
                        <p>Date : <?php echo getRelativeDate($evenement["date"]); ?></p>
                        <p>Créé par : <?php echo $evenement["createur"]; ?></p>
                    </div>
                    <div class="event-footer">
                        <div class="event-actions">
                            <button class="subscribe-btn">S'INSCRIRE</button>
                            <button class="like-btn">❤️</button>
                            <button class="share-btn">↪️</button>
                        </div>
                        <div class="event-stats">
                            <span>❤️: 0</span>
                            <span>👥: 0</span>
                        </div>
                    </div>
                </div>
            <?php } ?>
        </div>
    </main>

    <script src="script.js"></script>
</body>
</html>
