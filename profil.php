<?php
session_start();

// Vérifier si l'utilisateur est connecté
if (!isset($_SESSION["pseudo"])) {
    header("Location: connexion.php");
    exit();
}

$evenements = [];
if (file_exists('evenements.json')) {
    $evenementsData = file_get_contents('evenements.json');
    if (!empty($evenementsData)) {
        $evenements = json_decode($evenementsData, true);
    }
}

$evenementsInteresses = array_filter($evenements, function($evenement) {
    return isset($evenement["interesses"]) && in_array($_SESSION["pseudo"], $evenement["interesses"]);
});

$evenementsInscrits = array_filter($evenements, function($evenement) {
    return isset($evenement["participants"]) && in_array($_SESSION["pseudo"], $evenement["participants"]);
});
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Mon profil</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php include 'header.php'; ?>

    <main>
        <h1>Mon profil</h1>
        <h2>Bienvenue, <?php echo $_SESSION["pseudo"]; ?> !</h2>

        <h3>Événements auxquels vous vous êtes intéressé :</h3>
        <?php if (count($evenementsInteresses) > 0) { ?>
            <div id="event-feed">
                <?php foreach ($evenementsInteresses as $index => $evenement) { ?>
                    <?php include 'event_card.php'; ?>
                <?php } ?>
            </div>
        <?php } else { ?>
            <p>Vous ne vous êtes intéressé à aucun événement pour le moment.</p>
        <?php } ?>

        <h3>Événements auxquels vous vous êtes inscrit :</h3>
        <?php if (count($evenementsInscrits) > 0) { ?>
            <div id="event-feed">
                <?php foreach ($evenementsInscrits as $index => $evenement) { ?>
                    <?php include 'event_card.php'; ?>
                <?php } ?>
            </div>
        <?php } else { ?>
            <p>Vous ne vous êtes inscrit à aucun événement pour le moment.</p>
        <?php } ?>
    </main>

    <script src="script.js"></script>
</body>
</html>