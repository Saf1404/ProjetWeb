<?php
session_start();
$userPseudo = $_SESSION['pseudo'];
$evenementsData = file_get_contents('evenements.json');
$evenements = json_decode($evenementsData, true);

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    $evenement = null;
    foreach ($evenements as $evt) {
        if ($evt['id'] === $id) {
            $evenement = $evt;
            break;
        }
    }

    if ($evenement) {
        ?>
        <!DOCTYPE html>
        <html>
        <head>
            <title><?php echo $evenement['titre']; ?></title>
            <link rel="stylesheet" type="text/css" href="style.css">
            <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
        </head>
        <body>
            <?php include 'header.php'; ?>
            <br>
            <h1><?php echo $evenement['titre']; ?></h1>     
            <br>   
            <div class="event-details">
                <p><strong>Créé par :</strong> <?php echo $evenement['createur']; ?></p>
                <p><strong>Description :</strong> <?php echo $evenement['description']; ?></p>
                <p><strong>Lieu :</strong> <?php echo $evenement['lieu']; ?></p>
                <p><strong>Date :</strong> <?php echo date('m/d/Y à H:i', strtotime($evenement['date'])); ?></p>
                <p><strong>Participants :</strong> <?php echo count($evenement['participants']); ?></p>
                
                <div class="participants-list">
                    <ul>
                        <?php foreach ($evenement['participants'] as $participant) : ?>
                            <li><?php echo $participant; ?></li>
                        <?php endforeach; ?>
                    </ul>
                </div>
                
                <p><strong>Nombre d'intéressés :</strong> <?php echo count($evenement['interesses']); ?></p>

            </div>
            <div id="chat-container">
                <h2>Chat (<?php echo $evenement['titre']; ?>)</h2>
                <input type="hidden" id="event-id" value="<?php echo $evenement['id']; ?>">
                <div id="chat-messages"></div>
                <form id="chat-form">
                    <input type="text" id="message-input" placeholder="Entrez votre message...">
                    <button type="submit">Envoyer</button>
                </form>
            </div>


            <script src="jquery-3.7.1.min.js"></script>
            <script src="chat.js"></script>
        </body>
        </html>
        <?php
    } else {
        echo "Événement non trouvé.";
    }
} else {
    exit;
}
?>
